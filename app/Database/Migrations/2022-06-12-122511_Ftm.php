<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ftm extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_ftm' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'frame_count_ftm_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_ftm_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_ftm_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'frame_count_ftm_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_ftm_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'frame_count_ftm_3' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_ftm_3' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_ftm_3' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'frame_count_ftm_4' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_ftm_4' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_ftm_4' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_ftm', true);
		$this->forge->createTable('ftm');
	}

	public function down()
	{
		$this->forge->dropTable('ftm');
	}
}
