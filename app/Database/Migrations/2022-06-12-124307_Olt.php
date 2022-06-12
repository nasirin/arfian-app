<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Olt extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_olt' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'olt' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'modul' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_olt' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_olt', true);
		$this->forge->createTable('olt');
	}

	public function down()
	{
		$this->forge->dropTable('olt');
	}
}
