<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('id_perabot');

            $table->string('nama');

            $table->string('telepon');

            $table->text('alamat');

            $table->integer('jumlah');

            $table->bigInteger('total');

            $table->string('status')

                ->default('Pending');

            $table->timestamps();


            $table->foreign('id_perabot')

                ->references('id_perabot')

                ->on('perabots')

                ->cascadeOnDelete();

        });

    }


    public function down(): void
    {

        Schema::dropIfExists(

            'orders'

        );

    }

};