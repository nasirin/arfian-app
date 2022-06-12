<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Odp extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_odp' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'odp' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_odp', true);
		$this->forge->createTable('odp');
	}

	public function down()
	{
		$this->forge->dropTable('odp');
	}
}
