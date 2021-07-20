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
		$record = $this->data->getODC($id);
		$post = $this->request->getVar();

		// dd($post);

		// insert data
		$this->olt->ubah($post, $record);
		$this->ftm->ubah($post, $record);
		$this->spliter->ubah($post, $record);
		$this->feeder->ubah($post, $record);
		$this->odc->ubah($post, $record);
		$this->distribusi->ubah($post, $record);
		$this->odp->ubah($post, $record);
		$this->data->ubah($post, $id);

		if ($this->data->affectedRows()) {
			session()->setFlashdata('success', 'Data has been changed');
			return redirect()->back();
		} else {
			session()->setFlashdata('error', 'Try Again');
			return redirect()->back()->withInput();
		}
	}

	public function destroy($id)
	{
		$record = $this->data->find($id);

		// delete dta
		$this->olt->delete($record['id_olt']);
		$this->ftm->delete($record['id_ftm']);
		$this->spliter->delete($record['id_spliter']);
		$this->feeder->delete($record['id_feeder']);
		$this->odc->delete($record['id_odc']);
		$this->distribusi->delete($record['id_dist']);
		$this->odp->delete($record['id_odp']);
		$this->data->delete($id);

		if ($this->data->affectedRows()) {
			session()->setFlashdata('success', 'Data has been changed');
			return redirect()->back();
		} else {
			session()->setFlashdata('error', 'Try Again');
			return redirect()->back()->withInput();
		}
	}
}
