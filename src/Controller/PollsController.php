<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Polls Controller
 *
 * @property \App\Model\Table\PollsTable $Polls
 * @method \App\Model\Entity\Poll[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PollsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $polls = $this->paginate($this->Polls);
        $this->set(compact('polls'));
    }

    /**
     * View method
     *
     * @param string|null $id Poll id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poll = $this->Polls->get($id, [
            'contain' => ['Options'],
        ]);

        $this->set(compact('poll'));
    }
}
