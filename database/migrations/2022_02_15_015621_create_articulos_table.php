<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Articulo;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->decimal("precio");
            $table->string("seccion");
            $table->string("paisOrigen");
            $table->timestamps();
        });

        Articulo::create([
            "nombre" => "Pantalon",
            "precio" => 23.5,
            "seccion" => "Ropa",
            "paisOrigen" => "España"
        ]);

        Articulo::create([
            "nombre" => "Jarron",
            "precio" => 80,
            "seccion" => "Cerámica",
            "paisOrigen" => "China"
        ]);

        Articulo::create([
            "nombre" => "Portatil",
            "precio" => 540,
            "seccion" => "Informática",
            "paisOrigen" => "España"
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
};
