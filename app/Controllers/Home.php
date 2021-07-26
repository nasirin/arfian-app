<?php

namespace App\Controllers;

use App\Models\Data;
use App\Models\Lokasi;
use App\Models\Menu;
use App\Models\Odc;
use App\Models\Olt;

class Home extends BaseController
{
	protected $lokasi;
	protected $data;
	protected $odc;
	protected $olt;
	protected $menu;

	public function __construct()
	{
		$this->lokasi = new Lokasi();
		$this->data = new Data();
		$this->odc = new Odc();
		$this->olt = new Olt();
		$this->menu = new Menu();
	}

	public function index()
	{
		$data = [
			'lokasi' => $this->lokasi->findAll(),
			// 'menuODC' => $this->odc->menu(),
			// 'menuOLT' => $this->olt->menu(),
			'menu' => $this->menu->getMenu(),
		];
		// dd($data);

		return view('pages/home', $data);
	}
}
