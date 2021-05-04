<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('Matricule');
            $table->string('password');
            $table->date('First_date');
            $table->date('Last_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_humains');
    }
}
