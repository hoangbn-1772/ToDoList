<?php


class WorksController extends AppController
{
	public $name = "Works";

	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');

	function work()
	{
		$data = $this->Work->find("all");
		$this->set("data", $data);
	}

	public function insert()
	{
		if ($this->request->is('post')) {
			$this->Work->create();

			if ($this->Work->save(array(
				'work_content' => $this->request->data['Post']['work_content'],
				'start_date' => $this->request->data['Post']['start_date'],
				'status' => '0'
			))
			) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'work'));
			} else {
				$this->Flash->error(__('Unable to add your post.'));
			}
		}
	}

	public function edit($id = 0)
	{
		$work = $this->Work->findById($id);
		$this->set("data", $work);

		if ($this->request->is(array('post', 'put'))) {

			$work = $this->Work->findById($id);

			if ($work) {
				throw new NotFoundException(__('Invalid work'));
			}

			$this->Work->id = $id;
			if ($this->Work->save(array(
				'status' => '1'
			))) {
				$this->Flash->success(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'work'));
			} else {
				$this->Flash->error(__('Unable to update your post.'));
			}
		}
	}
}
