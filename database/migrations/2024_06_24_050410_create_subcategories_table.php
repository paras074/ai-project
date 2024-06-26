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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('status', ['yes', 'no']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
    
};
