<?php

namespace App\Models;

use CodeIgniter\Model;

class Ftm extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'ftm';
	protected $primaryKey           = 'id_ftm';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['frame_count_ftm_1', 'panel_ftm_1', 'port_ftm_1', 'frame_count_ftm_2', 'panel_ftm_2', 'port_ftm_2', 'frame_count_ftm_3', 'panel_ftm_3', 'port_ftm_3', 'frame_count_ftm_4', 'panel_ftm_4', 'port_ftm_4',];

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
			'frame_count_ftm_1' => $post['frameCountFTM1'], 'panel_ftm_1' => $post['panelFTM1'],
			'port_ftm_1' => $post['portFTM1'], 'frame_count_ftm_2' => $post['frameCountFTM2'], 'panel_ftm_2' => $post['panelFTM2'],
			'port_ftm_2' => $post['portFTM2'], 'frame_count_ftm_3' => $post['frameCountFTM3'], 'panel_ftm_3' => $post['panelFTM3'], 'port_ftm_3' => $post['portFTM3'], 'frame_count_ftm_4' => $post['frameCountFTM4'], 'panel_ftm_4' => $post['panelFTM4'], 'port_ftm_4' => $post['portFTM4'],
		];

		$this->insert($data);
	}
}
