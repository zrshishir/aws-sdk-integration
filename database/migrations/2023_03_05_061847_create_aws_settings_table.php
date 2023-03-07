<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aws_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('aws_access_key_id')->nullable();
            $table->string('aws_secret_access_key')->nullable();
            $table->string('aws_session_token')->nullable();
            $table->string('aws_region')->nullable();
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
        Schema::table('aws_settings', function (Blueprint $table) {
            Schema::dropIfExists('aws_settings');
        });
    }
}
