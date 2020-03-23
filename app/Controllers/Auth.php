<?php namespace App\Controllers;

use App\Models\Auth_Model;

class Auth extends BaseController
{

	protected $AM;

	public function __construct()
	{
		$this->AM = new Auth_Model();
	}

	public function index()
	{
    return redirect()->route('login');
  }
  
	public function login()
	{
		if(session()->has('user_id')){
			return redirect()->route('home');
		}

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');
		if ($this->request->getPost()) {
			if($user = $this->AM->where('member_email', $email)->first()){
				if ($user['delete_at'] == NULL) {
					if (password_verify($password, $user['member_password'])) {
							$dataSession = [
								'user_id' => $user['member_id'],
								'user_email' => $user['member_email'],
								'user_nama' => $user['member_nama'],
								'role' => 'member'
							];
							session()->set($dataSession);
							session()->setFlashdata('message', $this->free->sweetAlert('Horayy!','Berhasil login, silahkan gunakan aplikasi ini dengan bijak.', 'success'));
							return redirect()->route('home');
					} else {
						session()->setFlashdata('message', $this->free->alertBS('Gagal login, password salah.', 'Upss!', 'danger'));
						return redirect()->route('login');
					}
				} else {
					session()->setFlashdata('message', $this->free->alertBS('Gagal login, member telah dihapus.', 'Upss!', 'danger'));
					return redirect()->route('login');
				}
			} else {
				session()->setFlashdata('message', $this->free->alertBS('Gagal login, member tidak terdaftar.', 'Upss!', 'danger'));
				return redirect()->route('login');
			}
		} else {
			$data = [
				'title' => 'Login'
			];
			return view('login', $data);
		}
	}

	public function register()
	{
		if(session()->has('user_id')){
			return redirect()->route('home');
		}

		$data = [
			'title' => 'Register'
		];
		
		if ($this->request->getPost()) {
			if (!$this->validate('signup')) {
				return view('register', $data);
			} else {
				$request = [
					'member_nama' => $this->request->getVar('nama'),
					'member_email' => $this->request->getVar('email'),
					'member_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT, ['cost' => 10]),
					'create_at' => time(),
					'delete_at' => NULL
				];
				$this->AM->save($request);
				session()->setFlashdata('message', $this->free->alertBS('Berhasil mendaftar, silahkan login.', 'Horayy!', 'success'));
				return redirect()->route('login');
			}
		} else {
			return view('register', $data);
		}
  }

	public function logout()
	{
		if(!session()->has('user_id')){
			return redirect()->route('login');
		} else {
			session()->remove(['user_id','user_email', 'user_nama', 'role']); //session destroy
			session()->setFlashdata('message', $this->free->alertBS('Berhasil keluar, Terimakasih.', 'Horayy!', 'info'));
			return redirect()->route('login');
		}
  }

}
