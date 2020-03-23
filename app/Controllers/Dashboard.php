<?php namespace App\Controllers;

use App\Models\Dashboard_Model;

class Dashboard extends BaseController
{

	protected $DM;

	public function __construct()
	{
		if(!session()->has('user_id') AND !session()->role == 'member'){
			return redirect()->route('home');
		}
		$this->DM = new Dashboard_Model();
	}

	public function index()
	{
		$data = [
			'title' => 'Welcome'
		];

		return view('dashboard/welcome', $data);
	}

}
