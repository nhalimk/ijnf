<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Attendances Controller
 *
 * @property \App\Model\Table\AttendancesTable $Attendances
 * @method \App\Model\Entity\Attendance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttendancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['checkin','result','search','register']);
    }
    public function index()
    {
        $attendances = $this->paginate($this->Attendances);
        $attendances = $this->Attendances->find('all');


        $this->set(compact('attendances'));
    }
    
    
    public function search()
    {   
        $name = isset($_GET['name']) ? $_GET['name'] : '' ;
        $company = isset($_GET['company']) ? $_GET['company'] : '' ;
		$conn = ConnectionManager::get('default');
		$str = "Select 
                fullname, 
                id, 
                guestlists.`table` as tableno,
                company, 
                designation, 
                mobilenumber, 
                emailaddress from guestlists ";

        if($name != ''){
            $str.=" where company like '%".$company."%'";
        }

        if($company != ''){
            $str.=" where company like '%".$company."%'";
        }
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
    public function checkin()
    {
        $this->viewBuilder()->setLayout('blank');

        $attendance = $this->Attendances->newEmptyEntity();
        if ($this->request->is('post')) {
            $attendance = $this->Attendances->patchEntity($attendance, $this->request->getData());
            if ($this->Attendances->save($attendance)) {
                return $this->redirect(['action' => 'result/',$attendance->id]);

                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }
        $this->set(compact('attendance'));
    }
    public function register()
    {
        $this->viewBuilder()->setLayout('blank');
        $id = isset($_GET['id']) ? $_GET['id'] : '' ;
        
		$conn = ConnectionManager::get('default');
		$str = "select * from guestlists where id = ".$id;
        $data = $conn->execute($str);
        $res = $data ->fetch('assoc');
        $attendance = $this->Attendances->newEmptyEntity();
        if ($this->request->is('post')) {
            $attendance = $this->Attendances->patchEntity($attendance, $this->request->getData());
            if ($this->Attendances->save($attendance)) {
                return $this->redirect(['action' => 'result/',$attendance->id]);
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }
        $this->set(compact('attendance','res'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function result($id = null)
    {
        $this->viewBuilder()->setLayout('blank');
		$conn = ConnectionManager::get('default');
        $attendance = $this->Attendances->get($id, [
            'contain' => [],
        ]);
		$str = "select * from guestlists where fullname = '".$attendance->fullname."'";
        $data = $conn->execute($str);
        $res = $data ->fetch('assoc');

		$str2 = "select * from guestlists where guestlists.`table` = '".$res['table']."'";
        $data2 = $conn->execute($str2);
        $res2 = $data2 ->fetchAll('assoc');

        $this->set(compact('attendance','res2'));
    }
    public function view($id = null)
    {
        $attendance = $this->Attendances->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('attendance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendance = $this->Attendances->newEmptyEntity();
        if ($this->request->is('post')) {
            $attendance = $this->Attendances->patchEntity($attendance, $this->request->getData());
            if ($this->Attendances->save($attendance)) {
                return $this->redirect(['action' => 'result/',$attendance->id]);
                //$this->Flash->success(__('The attendance has been saved.'));

                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }
        $this->set(compact('attendance'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendance = $this->Attendances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendance = $this->Attendances->patchEntity($attendance, $this->request->getData());
            if ($this->Attendances->save($attendance)) {
                $this->Flash->success(__('The attendance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }
        $this->set(compact('attendance'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendance = $this->Attendances->get($id);
        if ($this->Attendances->delete($attendance)) {
            $this->Flash->success(__('The attendance has been deleted.'));
        } else {
            $this->Flash->error(__('The attendance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
