<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Lokasi as ModelsLokasi;
use App\Models\Menu;
use App\Models\Odc;
use App\Models\Olt;

class Lokasi extends BaseController
{
	protected $lokasi;
	protected $odc;
	protected $olt;
	protected $menu;

	public function __construct()
	{
		$this->odc = new Odc();
		$this->olt = new Olt();
		$this->lokasi = new ModelsLokasi();
		$this->menu = new Menu();
	}

	public function index()
	{
		$data = [
			'no' => 1,
			'lokasi' => $this->lokasi->findAll(),
			// 'menuODC' => $this->odc->menu(),
			// 'menuOLT' => $this->olt->menu(),
			'menu' => $this->menu->getMenu(),
		];

		return view('pages/lokasi/lokasi', $data);
	}


	public function store()
	{
		$post = $this->request->getVar();
		// dd($post);
		$this->lokasi->simpan($post);

		if ($this->lokasi->affectedRows()) {
			session()->setFlashdata('success', 'Data has been created');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/lokasi');
	}

	public function update($id)
	{
		$post = $this->request->getVar();

		$this->lokasi->ubah($post, $id);

		if ($this->lokasi->affectedRows()) {
			session()->setFlashdata('success', 'Data has been Updated');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/lokasi');
	}

	public function destroy($id)
	{
		$this->lokasi->delete($id);

		if ($this->lokasi->affectedRows()) {
			session()->setFlashdata('success', 'Data has been deleted');
		} else {
			session()->setFlashdata('error', 'Try Again!');
		}

		return redirect()->to('/lokasi');
	}
}
