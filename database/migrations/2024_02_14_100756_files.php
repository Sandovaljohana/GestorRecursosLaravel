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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->boolean('admin')->default(false);
            $table->timestamps();
        });

        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('original_name')->nullable(false);
            $table->string('real_name')->unique()->nullable(false);
            $table->date('creation_date')->nullable(false);
            $table->bigInteger('size_bytes')->unsigned()->nullable(false);
            $table->bigInteger('user_id')->unsigned()->nullable(false);
            $table->enum('type', ['jpg', 'pdf', 'pptx', 'other'])->default('other');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('shared_files', function (Blueprint $table) {
            $table->string('hash')->primary();
            $table->bigInteger('file_id')->unsigned()->nullable(false);
            $table->bigInteger('shared_user_id')->unsigned()->nullable(false);
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
            $table->foreign('shared_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
public function down()
{
        Schema::dropIfExists('shared_files');
        Schema::dropIfExists('files');
        Schema::dropIfExists('users');
}
};