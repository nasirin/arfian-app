<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_menu' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_odc' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_olt' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_lokasi' => [
				'type'           => 'INT',
				'constraint'     => 5,
			]
		]);
		$this->forge->addKey('id_menu', true);
		$this->forge->createTable('menu');
	}

	public function down()
	{
		$this->forge->dropTable('menu');
	}
}
