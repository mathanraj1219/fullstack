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
        //
        Schema::create('mous', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('departments');
            $table->string('comany_name');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('recipient_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('mous');
    }
};
