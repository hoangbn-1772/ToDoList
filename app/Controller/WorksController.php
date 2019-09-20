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
			$this->Work->id = $id;
			$status = $this->request->data['post']['status'];
			$work_content = $this->request->data['post']['work_content'];
			if ($status == 1) {
				$due_date = date('Y-m-d h:i:s');
			} else if ($status == 0) {
				$due_date = null;
			}

			if ($this->Work->save(array(
				'work_content' => $work_content,
				'due_date' => $due_date,
				'status' => $status
			))) {
				$this->Flash->success(__('Your work has been updated.'));
				return $this->redirect(array('action' => 'work'));
			} else {
				$this->Flash->error(__('Unable to update your post.'));
			}
		}
	}

	public function delete($id)
	{
		if ($this->Work->delete($id)) {
			return $this->redirect(array('action' => 'work'));
		} else {
			$this->Flash->error(__('The post with id: %s could not be deleted.', h($id)));
		}
	}
}
