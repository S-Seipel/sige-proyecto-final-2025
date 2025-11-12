<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->string('last_name');
            $table->string('name');
            $table->string('dni');
            $table->integer('year_old');
            $table->timestamp('birthdate');
            $table->string('cuil');
            // TODO: hacer a tabla dedicada
            $table->string('address');
            $table->string('phone');
            $table->text('email_abc');
            $table->string('zip_code');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
