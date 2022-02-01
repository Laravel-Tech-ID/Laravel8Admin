<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_accesses', function (Blueprint $table) {
            $table->char('user_id', 36)->nullable()->default(null);
            $table->char('access_id', 36)->nullable()->default(null);
            $table->char('created_by', 36)->nullable()->default(null);
            $table->timeStamp('created_at')->nullable()->default(null);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('access_id')->references('id')->on('accesses')->onDelete('cascade');

            $table->index(["user_id"], 'user_id');
            $table->index(["access_id"], 'access_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_accesses');
    }
}
