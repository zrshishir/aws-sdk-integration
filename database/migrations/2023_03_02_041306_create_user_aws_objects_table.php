<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAwsObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('user_aws_objects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key');
            $table->string('bucket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_aws_objects', function (Blueprint $table) {
            Schema::dropIfExists('user_aws_objects');
        });
    }
}
