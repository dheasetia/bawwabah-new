<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('advisor_id');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('city_id');
            $table->text('description')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('license_no')->unique()->nullable();
            $table->string('license_date')->nullable();
            $table->string('iban');
            $table->string('representative');
            $table->string('mobile', 10);
            $table->string('phone', 16);
            $table->string('second_phone', 16)->nullable();
            $table->string('fax', 16)->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->tinyInteger('is_banned')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_approved')->default(0);
            $table->string('street')->nullable();
            $table->string('district')->nullable();
            $table->string('building_no')->nullable();
            $table->string('additional_no')->nullable();
            $table->string('po_box')->nullable();
            $table->string('zip_code');
            $table->string('coordinate')->nullable();
            $table->text('ban_reason')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('offices');
    }
}
