<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
				'null'		=> false,
            ],
			'email'       => [
                'type'      => 'VARCHAR',
				'constraint' => 100,
                'unique' 	=> true,
            ],
            'password' => [
                'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => false,
            ],
			'created_by' => [
				'type' => 'VARCHAR',
				'null' => true,
			],
			// 'created_at datetime default current_timestamp',
			// 'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
		$this->forge->addKey('id');
        $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
