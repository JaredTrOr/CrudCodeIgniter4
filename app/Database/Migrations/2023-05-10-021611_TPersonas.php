<?php
/*
Code to make a migration: php spark migrate:create t_personas
This needs to be added in the console

Code to run the migration: php spark migrate t_personas
*/
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPersonas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nombre' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'apellidoPaterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'apellidoMaterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
        ]);
        $this->forge->addKey('id_nombre', true);
        $this->forge->createTable('t_personas');
    }

    public function down()
    {
        $this->forge->dropTable('t_personas');
    }
}
