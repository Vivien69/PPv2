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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedTinyInteger('type');
            $table->string('code')->nullable();
            $table->string('lien')->nullable();
            $table->mediumText('content');
            $table->decimal('bonus');
            $table->unsignedTinyInteger('etat');
            $table->foreignId('marchand_id')->constrained();
            $table->foreignId('user_id')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
};
