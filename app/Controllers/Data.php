<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data as ModelsData;
use App\Models\Distribusi;
use App\Models\Feeder;
use App\Models\Ftm;
use App\Models\Odc;
use App\Models\Odp;
use App\Models\Olt;
use App\Models\Spliter;

class Data extends BaseController
{
	protected $olt;
	protected $ftm;
	protected $spliter;
	protected $feeder;
	protected $odc;
	protected $distribusi;
	protected $odp;
	protected $data;

	public function __construct()
	{
		$this->olt = new Olt();
		$this->ftm = new Ftm();
		$this->spliter = new Spliter();
		$this->feeder = new Feeder();
		$this->odc = new Odc();
		$this->distribusi = new Distribusi();
		$this->odp = new Odp();
		$this->data = new ModelsData();
	}

	public function store()
	{
		$post = $this->request->getVar();

		// insert data
		$this->olt->simpan($post);
		$this->ftm->simpan($post);
		$this->spliter->simpan($post);
		$this->feeder->simpan($post);
		$this->odc->simpan($post);
		$this->distribusi->simpan($post);
		$this->odp->simpan($post);

		// get last data
		$data = [
			'olt' => $this->olt->getInsertID(),
			'ftm' => $this->ftm->getInsertID(),
			'spliter' => $this->spliter->getInsertID(),
			'feeder' => $this->feeder->getInsertID(),
			'odc' => $this->odc->getInsertID(),
			'distribusi' => $this->distribusi->getInsertID(),
			'odp' => $this->odp->getInsertID(),
			'lokasi' => $post['lokasi']
		];

		$this->data->simpan($data);

		session()->setFlashdata('success', 'Insert data successfully');
		return redirect()->back();
	}

	public function updated($id)
	{
		$post = $this->data->getODC($id);
	}
}
