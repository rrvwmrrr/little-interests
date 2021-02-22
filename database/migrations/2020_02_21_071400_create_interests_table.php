<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestsTable extends Migration
{
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('interesting_id');
            $table->string('interesting_type');

            $table->foreignId('interested_id');
            $table->string('interested_type');

            $table->timestamps();
        });
    }
}
