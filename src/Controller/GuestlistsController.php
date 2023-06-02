<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Guestlists Controller
 *
 * @property \App\Model\Table\GuestlistsTable $Guestlists
 * @method \App\Model\Entity\Guestlist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GuestlistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $guestlists = $this->paginate($this->Guestlists);

        $this->set(compact('guestlists'));
    }

    /**
     * View method
     *
     * @param string|null $id Guestlist id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guestlist = $this->Guestlists->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('guestlist'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guestlist = $this->Guestlists->newEmptyEntity();
        if ($this->request->is('post')) {
            $guestlist = $this->Guestlists->patchEntity($guestlist, $this->request->getData());
            if ($this->Guestlists->save($guestlist)) {
                $this->Flash->success(__('The guestlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guestlist could not be saved. Please, try again.'));
        }
        $this->set(compact('guestlist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Guestlist id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guestlist = $this->Guestlists->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guestlist = $this->Guestlists->patchEntity($guestlist, $this->request->getData());
            if ($this->Guestlists->save($guestlist)) {
                $this->Flash->success(__('The guestlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guestlist could not be saved. Please, try again.'));
        }
        $this->set(compact('guestlist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Guestlist id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guestlist = $this->Guestlists->get($id);
        if ($this->Guestlists->delete($guestlist)) {
            $this->Flash->success(__('The guestlist has been deleted.'));
        } else {
            $this->Flash->error(__('The guestlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
