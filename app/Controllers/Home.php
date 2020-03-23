<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('index', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact'
		];
		return view('v_contact', $data);
	}

	public function about()
	{
		echo 'about';
	}

	public function produk()
	{
		echo 'produk page';
	}

}
