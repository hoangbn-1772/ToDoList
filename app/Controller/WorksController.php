<?php


class WorksController extends AppController
{
	public $name = "Works";

	public $helpers = array('Html', 'Form');

	function add()
	{
		// Select method: get/put/post/delete
		$this->request->is('post');
		$this->Work->create();
		if ($this->Work->save($this->request->data)) {
			$this->Flash->success(__('Your post has been saved'));
			return $this->redirect(array('action' => 'work'));
		}
		$this->Flash->error(__('Unable to add your post.'));
	}

	function work()
	{
		$data = $this->Work->find("all");
		$this->set("data", $data);
	}
}
