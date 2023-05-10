<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Rayalists Controller
 *
 * @property \App\Model\Table\RayalistsTable $Rayalists
 * @method \App\Model\Entity\Rayalist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RayalistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['checkin','result','searchatt']);
    }
    public function index()
    {
        $rayalists = $this->paginate($this->Rayalists);

        $this->set(compact('rayalists'));
    }
    public function dashboard()
    {
        $rayalists = $this->paginate($this->Rayalists);

        $this->set(compact('rayalists'));
    }
    
    public function search()
    {   
        $id = isset($_GET['sid']) ? $_GET['sid'] : '' ;
		$conn = ConnectionManager::get('default');
		$str = "select * from rayalists 
				where rayalists.id = $id ";
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
    
    public function arrival()
    {   
		$conn = ConnectionManager::get('default');
		$str = "SELECT
        staffs.fullname, 
        staffs.staffno, 
        staffs.department, 
        staffs.photo, 
        date_format(date_add(rayalists.created, interval 8 hour),'%H:%i') masa
    FROM
        rayalists
        INNER JOIN
        staffs
        ON 
            rayalists.staffno = staffs.staffno";
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
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
     * @param string|null $id Rayalist id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rayalist = $this->Rayalists->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rayalist'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function checkin()
    {

        $this->viewBuilder()->setLayout('blank');
        $rayalist = $this->Rayalists->newEmptyEntity();
        if ($this->request->is('post')) {
            $conn = ConnectionManager::get('default');
            $str = "select * from rayalists
                        where rayalists.staffno = '$rayalist->staffno'";
                $data = $conn->execute($str);
                $staff = $data ->fetch('assoc');
                
                if($staff){
                    return $this->redirect(['action' => 'result/',$staff['id']]);
                }else{
                    
                    $rayalist = $this->Rayalists->patchEntity($rayalist, $this->request->getData());
                    if ($this->Rayalists->save($rayalist)) {
                        $this->Flash->success(__('The record has been saved.'));
    
                        return $this->redirect(['action' => 'result/',$rayalist->id]);
                    }
                    $this->Flash->error(__('The record could not be saved. Please, try again.'));
                }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $this->set(compact('rayalist'));
    }
    
    public function result($id = null)
    {
        $this->viewBuilder()->setLayout('blank');
        $dine = $this->Rayalists
        ->get($id, [
            'contain' => [],
        ]);

        $conn = ConnectionManager::get('default');
		$str = "select * from rayalists
                left join staffs on staffs.staffno = rayalists.staffno
				where rayalists.staffno = '$dine->staffno'";
        $data = $conn->execute($str);
        $staff = $data ->fetch('assoc');
        
        $this->set(compact('dine','staff'));
    }

    public function add()
    {
        $rayalist = $this->Rayalists->newEmptyEntity();
        if ($this->request->is('post')) {
            $rayalist = $this->Rayalists->patchEntity($rayalist, $this->request->getData());
            if ($this->Rayalists->save($rayalist)) {
                $this->Flash->success(__('The rayalist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rayalist could not be saved. Please, try again.'));
        }
        $this->set(compact('rayalist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rayalist id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rayalist = $this->Rayalists->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rayalist = $this->Rayalists->patchEntity($rayalist, $this->request->getData());
            if ($this->Rayalists->save($rayalist)) {
                $this->Flash->success(__('The rayalist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rayalist could not be saved. Please, try again.'));
        }
        $this->set(compact('rayalist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rayalist id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rayalist = $this->Rayalists->get($id);
        if ($this->Rayalists->delete($rayalist)) {
            $this->Flash->success(__('The rayalist has been deleted.'));
        } else {
            $this->Flash->error(__('The rayalist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function searchatt()
    {   
        $staffno = isset($_GET['staffno']) ? $_GET['staffno'] : '';
		$conn = ConnectionManager::get('default');
		$str = "select * from rayalists 
				where rayalists.staffno = '".$staffno."' ";
        $data = $conn->execute($str);
        $staff = $data ->fetch('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
}
