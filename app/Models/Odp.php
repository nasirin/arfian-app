<?php

namespace App\Models;

use CodeIgniter\Model;

class Odp extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'odp';
	protected $primaryKey           = 'id_odp';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['odp'];

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
		$data['odp'] = $post['namaODP'];

		$this->insert($data);
	}

	public function ubah($post, $record)
	{
		$data['odp'] = $post['namaODP'];

		$this->update($record['id_odp'], $data);
	}
}
