<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Gifts Controller
 *
 * @property \App\Model\Table\GiftsTable $Gifts
 * @method \App\Model\Entity\Gift[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GiftsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['winner']);
    }
    public function index()
    {
        $gifts = $this->paginate($this->Gifts);

        $this->set(compact('gifts'));
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
    
    public function searchexgift()
    {   
        $id = isset($_GET['staffno']) ? $_GET['staffno'] : '' ;
		$conn = ConnectionManager::get('default');
		$str = "select * from gifts 
				where gifts.staffno = $id ";
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
    
    public function lucky()
    {
        $this->viewBuilder()->setLayout('blank');
        $gift = $this->Gifts->newEmptyEntity();
        if ($this->request->is('post') && $_POST['staffno'] != ''  && $_POST['staffno'] != null) {
		    $conn = ConnectionManager::get('default');
            $str = "select * from gifts where gifts.staffno = '".$_POST['staffno']."' ";
            $data = $conn->execute($str);
            $staff = $data ->fetch('assoc');
            if(!$staff){
                $gift = $this->Gifts->patchEntity($gift, $this->request->getData());
                if ($this->Gifts->save($gift)) {
                    $this->Flash->success(__('The gift has been saved.'));
                    return $this->redirect(['action' => 'lucky']);
    
                }
            }
            $this->Flash->error(__('The gift could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'lucky']);
        }
        $this->set(compact('gift'));
		
        $gifts = $this->Gifts->find('all');
        $list = $this->fetchTable('Rayalists')->find()->all();
		
        $this->set(compact('gift','gifts','list'));
    }

    /**
     * View method
     *
     * @param string|null $id Gift id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gift = $this->Gifts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('gift'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gift = $this->Gifts->newEmptyEntity();
        if ($this->request->is('post')) {
            $gift = $this->Gifts->patchEntity($gift, $this->request->getData());
            if ($this->Gifts->save($gift)) {
                $this->Flash->success(__('The gift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gift could not be saved. Please, try again.'));
        }
        $this->set(compact('gift'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gift id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gift = $this->Gifts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gift = $this->Gifts->patchEntity($gift, $this->request->getData());
            if ($this->Gifts->save($gift)) {
                $this->Flash->success(__('The gift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gift could not be saved. Please, try again.'));
        }
        $this->set(compact('gift'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gift id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gift = $this->Gifts->get($id);
        if ($this->Gifts->delete($gift)) {
            $this->Flash->success(__('The gift has been deleted.'));
        } else {
            $this->Flash->error(__('The gift could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function winner()
    {   
		$conn = ConnectionManager::get('default');
		$str = "SELECT
                        staffs.fullname, 
                        staffs.staffno, 
                        staffs.department, 
                        staffs.photo
                    FROM
                        gifts
                        INNER JOIN
                        staffs
                        ON 
                            gifts.staffno = gifts.staffno AND
                            gifts.staffno = staffs.staffno
                            group by staffs.staffno
                            order by gifts.id desc ";
        $data = $conn->execute($str);
        $staff = $data ->fetchAll('assoc');
        
        $my_results = ['foo'=>'bar'];

        $this->set([
            'my_response' => $staff,
            '_serialize' => 'my_response',
        ]);
        $this->RequestHandler->renderAs($this, 'json');
    }
}
