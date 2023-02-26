<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signalers', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->foreignId('annonce_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->unsignedTinyInteger('motif');
            $table->mediumText('content');
            $table->unsignedTinyInteger('etat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signalers');
    }
};
