<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_accesses', function (Blueprint $table) {
            $table->char('role_id', 36)->nullable()->default(null);
            $table->char('access_id', 36)->nullable()->default(null);
            $table->char('created_by', 36)->nullable()->default(null);
            $table->timeStamp('created_at')->nullable()->default(null);

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('access_id')->references('id')->on('accesses')->onDelete('cascade');

            $table->index(["role_id"], 'role_id');
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
        Schema::dropIfExists('roles_accesses');
    }
}
