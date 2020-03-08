<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Welcome'
		];
		// return redirect()->to('/');
		return view('dashboard/welcome', $data);
	}

}
