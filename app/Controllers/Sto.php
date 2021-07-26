<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Lokasi;
use App\Models\Menu;
use App\Models\Odc;
use App\Models\Olt;

class Sto extends BaseController
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

	public function odc($lokasi, $odc)
	{
		$data = [
			'lokasi' => $this->lokasi->findAll(),
			// 'menuODC' => $this->odc->menu(),
			// 'menuOLT' => $this->olt->menu(),
			'odc' => $this->data->odc($lokasi, $odc),
			'odcTitle' => $odc,
			'menu' => $this->menu->getMenu(),
		];
		// dd($data);
		return view('pages/odc/odc', $data);
	}

	public function odcUbah($id)
	{
		$data = [
			'lokasi' => $this->lokasi->findAll(),
			// 'menuODC' => $this->odc->menu(),
			// 'menuOLT' => $this->olt->menu(),
			'odc' => $this->data->getODC($id),
			'menu' => $this->menu->getMenu(),
		];
		return view('pages/odc/odc_ubah', $data);
	}
}
