<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Spliter extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_spliter' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'frame_count_spliter_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_spliter_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'core_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'nama_spliter' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'out_spliter' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'frame_count_spliter_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_spliter_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'core_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_spliter', true);
		$this->forge->createTable('spliter');
	}

	public function down()
	{
		$this->forge->dropTable('spliter');
	}
}
