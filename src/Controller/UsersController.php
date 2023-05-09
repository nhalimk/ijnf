<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Auth->allow(['logout', 'login']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $this->set('auth', $this->Auth->user());
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect('/list');
            }
            $this->Flash->error(__('Please check your credentials!'));
        }
    }

    public function profile()
    {
        $conn = ConnectionManager::get('default');
        $results = $conn->execute("select * from vaccinestatuses where icno = '" . $this->Auth->user()['icno'] . "'")->fetch('assoc');
        $training = $conn->execute("
                        SELECT
                        staffs.staffno, 
                        staffs.fullname, 
                        staffs.department, 
                        staffs.position, 
                        staffs.phone, 
                        staffs.icno, 
                        staffs.category, 
                        staffs.type, 
                        staffs.division,
                        staffs.achd,
                        case 
                        when (trainings.bls_expiry is null) then '-'
                        when (trainings.bls_expiry = 'N/A') then '-'
                        else
                            date_format(trainings.bls_expiry,'%d/%m/%Y')
                        end bls_expiry,
                        case 
                        when (trainings.bls_expiry is null) then '-'
                        when (trainings.bls_expiry = 'N/A') then '-'
                        else
                            case when (date_format(str_to_date(trainings.bls_expiry,'%Y-%m-%d'),'%Y-%m') <= date_format(now(),'%Y-%m')) then 'expired' else 'valid' end
                        end bls_expired,
                        case 
                        when (trainings.bls_date is null) then '-'
                        when (trainings.bls_date = 'N/A') then '-'
                        else
                            date_format(trainings.bls_date,'%d/%m/%Y')
                        end bls_date,
                        case 
                        when (staffs.category in ('Doctors Others','Nurses Others','Nurses ACCU','Nurses AICU','Nurses HDU','Allied Health','Non-Medical Staff')) then 'Not Applicable'
                        when (trainings.pals_expiry is null) then '-'
                        when (trainings.pals_expiry = 'N/A') then '-'
                        else
                            date_format(trainings.pals_expiry,'%d/%m/%Y')
                        end pals_expiry,
                        case 
                        when (trainings.pals_expiry is null) then '-'
                        when (trainings.pals_expiry = 'N/A') then '-'
                        else
                            case when (date_format(str_to_date(trainings.pals_expiry,'%Y-%m-%d'),'%Y-%m') <= date_format(now(),'%Y-%m')) then 'expired' else 'valid' end
                        end pals_expired,
                        case 
                        when (staffs.category in ('Doctors Others','Nurses Others','Nurses ACCU','Nurses AICU','Nurses HDU','Allied Health','Non-Medical Staff')) then 'Not Applicable'
                        when (trainings.pals_date is null) then '-'
                        when (trainings.pals_date = 'N/A') then '-'
                        else
                            date_format(trainings.pals_date,'%d/%m/%Y')
                        end pals_date,
                        case 
                        when (staffs.category in ('Nurses Others','Doctors Paed','Allied Health','Non-Medical Staff')) 
                            then 'Not Applicable'
                        when (trainings.acls_date is null) then '-'
                        when (trainings.acls_date = 'N/A') then '-'
                        else
                            date_format(trainings.acls_date,'%d/%m/%Y')
                        end acls_date,
                        date_format(trainings.acls_date,'%d/%m/%Y') aclsdate,
                        date_format(trainings.pals_date,'%d/%m/%Y') palsdate,
                        date_format(trainings.bls_date,'%d/%m/%Y') blsdate,
                        date_format(trainings.acls_expiry,'%d/%m/%Y') aclsexpirydate,
                        date_format(trainings.pals_expiry,'%d/%m/%Y') palsexpirydate,
                        date_format(trainings.bls_expiry,'%d/%m/%Y') blsexpirydate,
                        case 
                        when (staffs.category in ('Nurses Others','Doctors Paed','Allied Health','Non-Medical Staff')) 
                            then 'Not Applicable'
                        when (trainings.acls_expiry is null) then '-'
                        when (trainings.acls_expiry = 'N/A') then '-'
                        else
                            date_format(trainings.acls_expiry,'%d/%m/%Y')
                        end acls_expiry,
                        case 
                        when (trainings.acls_expiry is null) then '-'
                        when (trainings.acls_expiry = 'N/A') then '-'
                        else
                            case when (date_format(str_to_date(trainings.acls_expiry,'%Y-%m-%d'),'%Y-%m') <= date_format(now(),'%Y-%m')) then 'expired' else 'valid' end
                        end acls_expired
                    FROM
                        staffs
                        LEFT JOIN
                        trainings
                        ON 
                            (
                                trainings.staffno = staffs.staffno
                            )
                    WHERE
                        staffs.staffno = '" . $this->Auth->user()['staffno'] . "'
                        and staffs.staffno != '0000' and staffs.staffno not like 'BOD%' and
                        staffs.status_id = 1
                        AND department IN (
                        SELECT
                            dt.department 
                        FROM
                        ( SELECT DISTINCT ( address2.`Department Description` ) department FROM address2 ) AS dt 
                        )
                            AND staffs.category != 'Away from IJN' ")->fetch('assoc');
        $hepb = $conn->execute("select * from vaccineb where staffno = '" . $this->Auth->user()['staffno'] . "'")->fetchAll('assoc');
        $this->set(compact('results', 'hepb', 'training'));
    }

    public function logout()
    {
        $this->Flash->success('You are logged out.');
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departments', 'Permissions', 'Signs'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
