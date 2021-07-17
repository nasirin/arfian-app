<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Auth extends BaseController
{
	protected $user;

	public function __construct()
	{
		$this->user = new User();
	}

	public function index()
	{
		return view('pages/login');
	}

	public function login()
	{
		$post = $this->request->getVar();
		// dd($post);
		$user = $this->user
			->where('notelp', $post['notelp'])
			->where('password', md5($post['password']))
			->first();
		if ($user) {
			$data = [
				'id' => $user['id_user'],
				'nama' => $user['nama_user']
			];
			session()->set($data);
			return redirect()->to('/');
		} else {
			session()->setFlashdata('error', 'Nomor Telepon atau Password Salah');
			return redirect()->back();
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth');
	}
}
