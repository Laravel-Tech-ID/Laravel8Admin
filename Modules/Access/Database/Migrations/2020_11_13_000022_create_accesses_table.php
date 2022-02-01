<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'accesses';

    /**
     * Run the migrations.
     * @table user_accesses
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->string('name')->nullable()->default(null);
            $table->string('guard_name')->nullable()->default(null);
            $table->string('status', 10)->nullable()->default(null);
            $table->string('desc')->nullable()->default(null);
            $table->char('created_by', 36)->nullable()->default(null);
            $table->char('updated_by', 36)->nullable()->default(null);
            $table->nullableTimestamps();

            $table->index(["id"], 'id');
            $table->index(["name"], 'name');
            $table->index(["guard_name"], 'guard_name');
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
