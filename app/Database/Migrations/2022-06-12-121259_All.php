<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class All extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_all' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_olt' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_ftm' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_spliter' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_feeder' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_dist' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_odc' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_odp' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_lokasi' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
		]);
		$this->forge->addKey('id_all', true);
		$this->forge->createTable('all');
	}

	public function down()
	{
		$this->forge->dropTable('all');
	}
}
