<?php

namespace App\Models;

use CodeIgniter\Model;

class Spliter extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'spliter';
	protected $primaryKey           = 'id_spliter';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['frame_count_spliter_1', 'panel_spliter_1', 'core_1', 'nama_spliter', 'out_spliter', 'frame_count_spliter_2', 'panel_spliter_2', 'core_2'];

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
			'frame_count_spliter_1' => $post['frameCountSpliter1'],
			'panel_spliter_1' => $post['panelSpliter1'],
			'core_1' => $post['coreSpliter1'],
			'nama_spliter' => $post['namaSpliter'],
			'out_spliter' => $post['outSpliter'], 'frame_count_spliter_2' => $post['frameCountSpliter2'], 'panel_spliter_2' => $post['panelSpliter2'], 'core_2' => $post['coreSpliter2']
		];

		$this->insert($data);
	}
}
