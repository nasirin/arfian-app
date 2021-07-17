<?php

namespace App\Models;

use CodeIgniter\Model;

class Olt extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'olt';
	protected $primaryKey           = 'id_olt';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['olt', 'modul', 'port_olt'];

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
			'olt' => $post['namaOLT'],
			'modul' => $post['modulOLT'],
			'port_olt' => $post['portOLT']
		];

		$this->insert($data);
	}

	public function menu()
	{
		return $this->db->table($this->table)
			->where('olt !=', '')
			->get()->getResultArray();
	}
}
