<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feeder extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_feeder' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_feeder' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'kap_feeder' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'core_feeder' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			]
		]);
		$this->forge->addKey('id_feeder', true);
		$this->forge->createTable('feeder');
	}

	public function down()
	{
		$this->forge->dropTable('feeder');
	}
}
