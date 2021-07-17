<?php

namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'all';
	protected $primaryKey           = 'id_all';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_olt', 'id_ftm', 'id_spliter', 'id_feeder', 'id_dist', 'id_odc', 'id_odp', 'id_lokasi', 'id_user'];

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
			'id_olt' => $post['olt'],
			'id_ftm' => $post['ftm'],
			'id_spliter' => $post['spliter'],
			'id_feeder' => $post['feeder'],
			'id_dist' => $post['distribusi'],
			'id_odc' => $post['odc'],
			'id_odp' => $post['odp'],
			'id_lokasi' => $post['lokasi'],
			'id_user' => session('id')
		];

		$this->insert($data);
	}

	public function odc($lokasi, $odc)
	{
		return $this->db->table($this->table)
			->join('olt', 'olt.id_olt = all.id_olt', 'left')
			->join('ftm', 'ftm.id_ftm = all.id_ftm', 'left')
			->join('spliter', 'spliter.id_spliter = all.id_spliter', 'left')
			->join('feeder', 'feeder.id_feeder = all.id_feeder', 'left')
			->join('distribusi', 'distribusi.id_dist = all.id_dist', 'left')
			->join('odc', 'odc.id_odc = all.id_odc', 'left')
			->join('odp', 'odp.id_odp = all.id_odp', 'left')
			->join('lokasi', 'lokasi.id_lokasi = all.id_lokasi', 'left')
			->where('odc.nama_odc', $odc)
			->where('lokasi.nama_lokasi', $lokasi)
			->get()->getResultArray();
	}

	public function getODC($id)
	{
		return $this->db->table($this->table)
			->join('olt', 'olt.id_olt = all.id_olt', 'left')
			->join('ftm', 'ftm.id_ftm = all.id_ftm', 'left')
			->join('spliter', 'spliter.id_spliter = all.id_spliter', 'left')
			->join('feeder', 'feeder.id_feeder = all.id_feeder', 'left')
			->join('distribusi', 'distribusi.id_dist = all.id_dist', 'left')
			->join('odc', 'odc.id_odc = all.id_odc', 'left')
			->join('odp', 'odp.id_odp = all.id_odp', 'left')
			->join('lokasi', 'lokasi.id_lokasi = all.id_lokasi', 'left')
			->where('all.id_all', $id)
			->get()->getRowArray();
	}
}
