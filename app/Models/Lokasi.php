<?php

namespace App\Models;

use CodeIgniter\Model;

class Lokasi extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'lokasi';
	protected $primaryKey           = 'id_lokasi';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'nama_lokasi', 'slug_lokasi'];

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
			'id_user' => session('id'),
			'nama_lokasi' => $post['lokasi'],
			'slug_lokasi' => url_title($post['lokasi'], '-', true),
		];

		$this->insert($data);
	}

	public function ubah($post, $id)
	{
		$data = [
			'id_user' => session('id'),
			'nama_lokasi' => $post['lokasi'],
			'slug_lokasi' => url_title($post['lokasi'], '-', true),
		];

		$this->update($id, $data);
	}
}
