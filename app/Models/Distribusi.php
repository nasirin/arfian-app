<?php

namespace App\Models;

use CodeIgniter\Model;

class Distribusi extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'distribusi';
	protected $primaryKey           = 'id_dist';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nama_dist', 'kap_dist', 'core_dist'];

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
			'nama_dist' => $post['namaDist'],
			'kap_dist' => $post['kapDist'],
			'core_dist' => $post['coreDist']
		];

		$this->insert($data);
	}
}
