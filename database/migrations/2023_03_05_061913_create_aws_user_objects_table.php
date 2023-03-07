<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwsUserObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aws_user_objects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('aws_setting_id');
            $table->string('name');
            $table->string('key');
            $table->string('bucket');
            $table->string('bucket_url');
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
        Schema::table('aws_user_objects', function (Blueprint $table) {
            Schema::dropIfExists('aws_user_objects');
        });
    }
}
