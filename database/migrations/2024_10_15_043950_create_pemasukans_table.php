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
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->string('pelaksanaan');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukans');

        Schema::table('pemasukans', function(Blueprint $table) {
            $table->dropForeign('pemasukans_tambahdatas_id_foreign');
        });
        Schema::table('pemasukans', function(Blueprint $table) {
            $table->dropIndex('pemasukans_tambahdatas_id_foreign');
        });
        Schema::table('pemasukans', function(Blueprint $table) {
            $table->dropForeign('pemasukans_tambahdatas_id_foreign');
        });
        Schema::table('pemasukans', function(Blueprint $table) {
            $table->dropIndex('pemasukans_tambahdatas_id_foreign');
        });
              
        
    }
    
};
