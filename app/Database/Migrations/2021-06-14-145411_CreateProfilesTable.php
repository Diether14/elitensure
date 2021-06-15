<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfilesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'commission_rate' => [
					'type' => 'INT',
					'null' => false,
			],
			'tax_rate' => [
				'type' => 'INT',
				'null' => false,
		],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('profiles');
	}

	public function down()
	{
		$this->forge->dropTable('profiles');
	}
}
