<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->string('slug');
            $table->string('description');
            $table->longText('title');
            $table->string('image_path');
            
        });
    }
    public function down()
    {
        //
    }
};
