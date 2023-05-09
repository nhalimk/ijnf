<?php
declare(strict_types=1);

namespace App\Controller;

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
    public function index()
    {
        $gifts = $this->paginate($this->Gifts);

        $this->set(compact('gifts'));
    }
    public function lucky()
    {
        $this->viewBuilder()->setLayout('blank');
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
}
