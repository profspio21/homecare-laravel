<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturansTable extends Migration
{
    public function up()
    {
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}