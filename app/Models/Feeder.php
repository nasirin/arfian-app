<?php

namespace App\Models;

use CodeIgniter\Model;

class Feeder extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'feeder';
	protected $primaryKey           = 'id_feeder';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nama_feeder', 'kap_feeder', 'core_feeder'];

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
			'nama_feeder' => $post['namaFeeder'],
			'kap_feeder' => $post['kapFeeder'],
			'core_feeder' => $post['coreFeeder']
		];

		$this->insert($data);
	}
}
