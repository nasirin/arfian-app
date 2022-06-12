<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lokasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_lokasi' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'nama_lokasi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'slug_lokasi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_lokasi', true);
		$this->forge->createTable('lokasi');
	}

	public function down()
	{
		$this->forge->dropTable('lokasi');
	}
}
