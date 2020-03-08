<?php namespace App\Controllers;

class Auth extends BaseController
{

	public function __construct()
	{
		
	}

	public function index()
	{
    redirect()->route('login');
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
		$data = [
			'title' => 'Register'
		];
		return view('login', $data);
  }

	public function logout()
	{
		$data = [
			'title' => 'Welcome'
		];
		return view('login', $data);
  }

}
