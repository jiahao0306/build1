<?php

class AppController extends Controller
{

	public $components = array(
		'DebugKit.Toolbar',
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'index'),
			'loginAction' => array('controller' => 'users', 'action' => 'login', 'admin' => false),
			'authError' => "You do not have permission to access that page.",
			'authorize' => array('Controller'),
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
			)
		)
	);

	public function isAuthorized($user)
	{
		return true;
	}

	public function beforeFilter()
	{
		// allow 'pages' to show
		$this->Auth->allow('display');

		// find out which prefixes have been specified in the core.php file and loop though them
		$routing_prefixes = Configure::read('Routing.prefixes');
		foreach ($routing_prefixes as $prefix)
		{
			// check if one of the routing prefixes matches the current page's prefix
			if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == $prefix && $this->Auth->user($prefix) != 1)
			{
				// user is not allowed on current page, redirect to login screen
				AuthComponent::redirect();
			}

			// set layout based on routing prefix
			if (isset($this->request->params['prefix']) && $this->request->params['prefix'] == $prefix)
			{
				$this->layout = $prefix;
			}
		}

//		$this->set('logged_in', $this->Auth->loggedIn());
		$this->set('auth_user', $this->Auth->user());
	}

}