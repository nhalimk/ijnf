<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Agms Controller
 *
 * @property \App\Model\Table\AgmsTable $Agms
 * @method \App\Model\Entity\Agm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgmsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['checkin','result','searchatt','dashboard','arrival']);
    }
    public function index()
    {
        $agms = $this->paginate($this->Agms);

        $this->set(compact('agms'));
    }
    public function dashboard()
    {
        $agms = $this->paginate($this->Agms);

        $this->set(compact('agms'));
    }
    
    public function arrival()
    {   
		$conn = ConnectionManager::get('default');
		$str = "SELECT
        staffs.fullname, 
        staffs.staffno, 
        staffs.department, 
        staffs.photo, 
        date_format(date_add(agms.created, interval 8 hour),'%H:%i') masa
    FROM
        agms
        INNER JOIN
        staffs
        ON 
        agms.staffno = staffs.staffno";
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
    
    public function searchatt()
    {   
        $staffno = isset($_GET['staffno']) ? $_GET['staffno'] : '';
		$conn = ConnectionManager::get('default');
		$str = "select * from agms 
				where agms.staffno = '".$staffno."' ";
        $data = $conn->execute($str);
        $staff = $data ->fetch('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }

    /**
     * View method
     *
     * @param string|null $id Agm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agm = $this->Agms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('agm'));
    }
    public function checkin()
    {
        $this->viewBuilder()->setLayout('blank');
        $agm = $this->Agms->newEmptyEntity();
        if ($this->request->is('post')) {
            $agm = $this->Agms->patchEntity($agm, $this->request->getData());
            $conn = ConnectionManager::get('default');
            $str = "select * from agms
                        where agms.staffno = '$agm->staffno'";
                $data = $conn->execute($str);
                $staff = $data ->fetch('assoc');
                
                if($staff){
                    return $this->redirect(['action' => 'result/',$staff['id']]);
                }else{
                    
                    $agm = $this->Agms->patchEntity($agm, $this->request->getData());
                    if ($this->Agms->save($agm)) {
                        $this->Flash->success(__('The record has been saved.'));
    
                        return $this->redirect(['action' => 'result/',$agm->id]);
                    }
                    $this->Flash->error(__('The record could not be saved. Please, try again.'));
                }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $this->set(compact('agm'));
    }
    
    public function result($id = null)
    {
        $this->viewBuilder()->setLayout('blank');
        $dine = $this->Agms
        ->get($id, [
            'contain' => [],
        ]);

        $conn = ConnectionManager::get('default');
		$str = "select * from agms
                left join staffs on staffs.staffno = agms.staffno
				where agms.staffno = '$dine->staffno'";
        $data = $conn->execute($str);
        $staff = $data ->fetch('assoc');
        
        $this->set(compact('dine','staff'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agm = $this->Agms->newEmptyEntity();
        if ($this->request->is('post')) {
            $agm = $this->Agms->patchEntity($agm, $this->request->getData());
            if ($this->Agms->save($agm)) {
                $this->Flash->success(__('The agm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agm could not be saved. Please, try again.'));
        }
        $this->set(compact('agm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agm = $this->Agms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agm = $this->Agms->patchEntity($agm, $this->request->getData());
            if ($this->Agms->save($agm)) {
                $this->Flash->success(__('The agm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agm could not be saved. Please, try again.'));
        }
        $this->set(compact('agm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agm = $this->Agms->get($id);
        if ($this->Agms->delete($agm)) {
            $this->Flash->success(__('The agm has been deleted.'));
        } else {
            $this->Flash->error(__('The agm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
