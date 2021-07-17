<?php

namespace App\Models;

use CodeIgniter\Model;

class Odc extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'odc';
	protected $primaryKey           = 'id_odc';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nama_odc', 'kap_odc', 'panel_in', 'port_odc_1', 'spliter_odc', 'out_odc', 'panel_out', 'port_odc_2'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function simpan($post)
	{
		$data = [
			'nama_odc' => $post['namaODC'],
			'kap_odc' => $post['kapODC'],
			'panel_in' => $post['panelInODC'],
			'port_odc_1' => $post['portODC1'],
			'spliter_odc' => $post['splitterODC'],
			'out_odc' => $post['outODC'],
			'panel_out' => $post['panelOutODC'],
			'port_odc_2' => $post['portODC2']
		];

		$this->insert($data);
	}

	public function menu()
	{
		return $this->db->table($this->table)
			->where('nama_odc !=', '')
			->get()->getResultArray();
	}
}
