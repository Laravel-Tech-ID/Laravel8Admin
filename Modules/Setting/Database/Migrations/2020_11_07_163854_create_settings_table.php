<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('initial',255)->nullable();
            $table->string('name',255)->nullable();
            $table->longText('description')->nullable();
            $table->string('icon', 255)->nullable()->default(null);
            $table->string('logo',255)->nullable();
            $table->string('login_image',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('google',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('copyright',255)->nullable();
            $table->string('maps_key',255)->nullable();
            $table->string('latitude',255)->nullable();
            $table->string('longitude',255)->nullable();
            $table->text('api_key')->nullable();
            $table->char('created_by', 36)->nullable()->default(null);
            $table->char('updated_by', 36)->nullable()->default(null);
            $table->nullableTimestamps();

            $table->index(["id"], 'id');
            $table->index(["initial"], 'initial');
            $table->index(["name"], 'name');
            $table->index(["icon"], 'icon');
            $table->index(["logo"], 'logo');
            $table->index(["login_image"], 'login_image');
            $table->index(["phone"], 'phone');
            $table->index(["email"], 'email');
            $table->index(["facebook"], 'facebook');
            $table->index(["twitter"], 'twitter');
            $table->index(["google"], 'google');
            $table->index(["instagram"], 'instagram');
            $table->index(["copyright"], 'copyright');
            $table->index(["maps_key"], 'maps_key');
            $table->index(["latitude"], 'latitude');
            $table->index(["longitude"], 'longitude');
            $table->index(["created_at"], 'created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
