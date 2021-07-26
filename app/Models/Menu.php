<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'menu';
	protected $primaryKey           = 'id_menu';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_odc', 'id_olt', 'id_lokasi'];

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
		// dd($post);
		$data = [
			'id_odc' => $post['odc'],
			'id_olt' => $post['olt'],
			'id_lokasi' => $post['lokasi'],
		];

		$this->insert($data);
	}

	public function getMenu()
	{
		return $this->db->table($this->table)
			->join('odc', 'odc.id_odc = menu.id_odc', 'left')
			->join('olt', 'olt.id_olt = menu.id_olt', 'left')
			->join('lokasi', 'lokasi.id_lokasi = menu.id_lokasi', 'left')
			->get()->getResultArray();
	}
}
