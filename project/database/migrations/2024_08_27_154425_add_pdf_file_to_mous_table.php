<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPdfFileToMousTable extends Migration
{
    public function up()
    {
        Schema::table('mous', function (Blueprint $table) {
            $table->string('pdf_file')->nullable(); // Add the new column
        });
    }

    public function down()
    {
        Schema::table('mous', function (Blueprint $table) {
            $table->dropColumn('pdf_file'); // Remove the column if needed
        });
    }
}