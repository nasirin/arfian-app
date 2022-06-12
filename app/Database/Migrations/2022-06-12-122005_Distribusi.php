<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Distribusi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_dist' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_dist' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'kap_dist' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'core_dist' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			]
		]);
		$this->forge->addKey('id_dist', true);
		$this->forge->createTable('distribusi');
	}

	public function down()
	{
		$this->forge->dropTable('distribusi');
	}
}
