<?php

class UsersController extends AppController
{

	public $name = 'Users';
	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'email' => 'asc'
		)
	);

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('register', 'login, logout');
	}

	public function login()
	{
		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash('Your email address and/or password was incorrect');
			}
		}
	}

	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}

	public function dashboard()
	{
		$this->set('title_for_layout', 'Dashboard');
		$this->set('user', $this->Auth->user());
	}

	public function register()
	{

		// check if user already logged in
		if ($this->Auth->loggedIn())
		{
			$this->Session->setFlash('You\'re already registered.');
			$this->redirect(array('action' => 'dashboard'));
		}

		if ($this->request->is('post'))
		{
			if ($this->User->save($this->request->data))
			{
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}

	}

	public function admin_index()
	{
		$users = $this->paginate('User');
		$this->set('users', $users);
	}

	public function admin_view($id = null)
	{
		$this->User->id = $id;

		if (!$this->User->exists())
		{
			throw new NotFoundException('Invalid user');
		}

		if (!$id)
		{
			$this->Session->setFlash('Invalid user');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read());
	}

	public function admin_add()
	{
		if ($this->request->is('post'))
		{
			if ($this->User->save($this->request->data))
			{
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}

	public function admin_edit($id = null)
	{
		$this->User->id = $id;

		if (!$this->User->exists())
		{
			throw new NotFoundException('Invalid user');
		}

		if ($this->request->is('post') || $this->request->is('put'))
		{
			if ($this->User->save($this->request->data))
			{
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
		else
		{
			$this->request->data = $this->User->read();
		}
	}

	public function admin_delete($id = null)
	{
		if ($this->request->is('get'))
		{
			throw new MethodNotAllowedException();
		}

		if (!$id)
		{
			$this->Session->setFlash('Invalid id for user');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->User->delete($id))
		{
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'index'));
	}

}