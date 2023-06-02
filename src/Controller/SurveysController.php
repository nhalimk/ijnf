<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Surveys Controller
 *
 * @property \App\Model\Table\SurveysTable $Surveys
 * @method \App\Model\Entity\Survey[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SurveysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['form','result']);
    }
    public function index()
    {
        $surveys = $this->paginate($this->Surveys);

        $this->set(compact('surveys'));
    }
    public function form()
    {
        $this->viewBuilder()->setLayout('blank');
        
        $survey = $this->Surveys->newEmptyEntity();
        if ($this->request->is('post')) {
            $survey = $this->Surveys->patchEntity($survey, $this->request->getData());
            if ($this->Surveys->save($survey)) {
                return $this->redirect(['action' => 'result/',$survey->id]);
            }
            $this->Flash->error(__('The survey could not be saved. Please, try again.'));
        }
        $this->set(compact('survey'));
    }

    /**
     * View method
     *
     * @param string|null $id Survey id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $survey = $this->Surveys->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('survey'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $survey = $this->Surveys->newEmptyEntity();
        if ($this->request->is('post')) {
            $survey = $this->Surveys->patchEntity($survey, $this->request->getData());
            if ($this->Surveys->save($survey)) {
                $this->Flash->success(__('The survey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The survey could not be saved. Please, try again.'));
        }
        $this->set(compact('survey'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Survey id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $survey = $this->Surveys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $survey = $this->Surveys->patchEntity($survey, $this->request->getData());
            if ($this->Surveys->save($survey)) {
                $this->Flash->success(__('The survey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The survey could not be saved. Please, try again.'));
        }
        $this->set(compact('survey'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Survey id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $survey = $this->Surveys->get($id);
        if ($this->Surveys->delete($survey)) {
            $this->Flash->success(__('The survey has been deleted.'));
        } else {
            $this->Flash->error(__('The survey could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
