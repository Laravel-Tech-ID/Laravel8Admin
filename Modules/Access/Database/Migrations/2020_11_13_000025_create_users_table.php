<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->string('code', 20)->nullable()->default(null);
            $table->string('name', 50)->nullable()->default(null);
            $table->string('phone', 15)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->string('api_token')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password', 100)->nullable()->default(null);
            $table->string('status', 10)->nullable()->default(null);
            $table->string('picture', 200)->nullable()->default(null);
            $table->string('blocked', 3)->nullable()->default(null);
            $table->string('blocked_reason')->nullable()->default(null);
            $table->rememberToken();
            $table->char('created_by', 36)->nullable()->default(null);
            $table->char('updated_by', 36)->nullable()->default(null);
            $table->nullableTimestamps();

            $table->index(["id"], 'id');
            $table->index(["code"], 'code');
            $table->index(["name"], 'name');
            $table->index(["phone"], 'phone');
            $table->index(["email"], 'email');
            $table->index(["status"], 'status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
