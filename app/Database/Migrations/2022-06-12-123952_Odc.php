<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Odc extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_odc' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_odc' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'kap_odc' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_in' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_odc_1' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'spliter_odc' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'out_odc' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'panel_out' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'port_odc_2' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_odc', true);
		$this->forge->createTable('odc');
	}

	public function down()
	{
		$this->forge->dropTable('odc');
	}
}
