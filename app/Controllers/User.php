<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Lokasi;
use App\Models\Menu;
use App\Models\Odc;
use App\Models\Olt;
use App\Models\User as ModelsUser;

class User extends BaseController
{
	protected $user;
	protected $lokasi;
	protected $odc;
	protected $olt;
	protected $menu;

	public function __construct()
	{
		$this->user = new ModelsUser();
		$this->lokasi = new Lokasi();
		$this->odc = new Odc();
		$this->olt = new Olt();
		$this->menu = new Menu();
	}

	public function index()
	{
		$data = [
			'no' => 1,
			'user' => $this->user->findAll(),
			'lokasi' => $this->lokasi->findAll(),
			// 'menuODC' => $this->odc->menu(),
			// 'menuOLT' => $this->olt->menu()
			'menu' => $this->menu->getMenu(),
		];

		return view('pages/user/user', $data);
	}

	public function store()
	{
		$post = $this->request->getVar();
		// dd($post);
		$this->user->store($post);

		if ($this->user->affectedRows()) {
			session()->setFlashdata('success', 'Data has been created');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/user');
	}

	public function update($id)
	{
		$post = $this->request->getVar();

		$this->user->ubah($post, $id);

		if ($this->user->affectedRows()) {
			session()->setFlashdata('success', 'Data has been Updated');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/user');
	}

	public function destroy($id)
	{
		$this->user->delete($id);

		if ($this->user->affectedRows()) {
			session()->setFlashdata('success', 'Data has been deleted');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/user');
	}
}
