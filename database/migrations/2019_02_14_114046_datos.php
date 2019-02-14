<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'name' => 'Alejandro',
            'email' => 'alexnietohinojosa@gmail.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'admin' => '1'
        ));

        $categorias = ["Educacion", "Tecnico", "Miscelaneo"];
        foreach ($categorias as $categoria){
            DB::table('categorias')->insert(array(
                'nombre' => $categoria,
            ));

        }

        DB::table('tickets')->insert(array(
            'titulo' => 'Ticket War',
            'categoria' => '1',
            'user_id' => '1',
            'comentario' => ''
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}
