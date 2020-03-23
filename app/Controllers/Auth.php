<?php namespace App\Controllers;

class Auth extends BaseController
{

	public function __construct()
	{
		
	}

	public function index()
	{
    return redirect()->route('login');
  }
  
	public function login()
	{
		$newdata = [
			'username'  => 'johndoe',
			'email'     => 'johndoe@some1-site.com',
			'logged_in' => TRUE
		];

		$this->session->set($newdata);

		$data = [
			'title' => 'Login'
		];
		return view('login', $data);
  }

	public function register()
	{
		$data1 = [
			'nama' => 'asdsdad das',
			'email' => 'asd@asd.com',
			'password' => '123asd',
			'password1' => '123asd'
		];

		$data = [
			'title' => 'Register'
		];
		

		if ($this->request->getPost()) {

				if (!$this->validate('signup')) {
					return view('register', [
						'title' => 'Register',
						'validation' => $this->validator
					]);
				} else {
					return redirect()->route('home');
				}
		} else {
			return view('register', $data);
		}
						
  }

	public function logout()
	{
		$data = [
			'title' => 'Welcome'
		];
		return view('login', $data);
  }

}
