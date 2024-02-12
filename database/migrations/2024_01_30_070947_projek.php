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
        Schema::create('projek', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('nmr_pesan')->unique();
            $table->string('jdl_project');
            $table->text('fitur');
            $table->text('dnh_rmh');
            $table->text('dnh_prjct');
            $table->string('stat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
