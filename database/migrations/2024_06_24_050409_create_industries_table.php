<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('status', ['yes', 'no'])->default('yes');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('industries');
    }
    
};
