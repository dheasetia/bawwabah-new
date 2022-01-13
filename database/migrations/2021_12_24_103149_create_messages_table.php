<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->tinyInteger('is_draft')->default(0);
            $table->string('subject');
            $table->text('body')->nullable();
            $table->dateTime('expiry_date')->nullable();
            $table->string('attachment')->nullable();
            $table->string('hijri_created_day', 2)->nullable();
            $table->string('hijri_created_month', 2)->nullable();
            $table->string('hijri_created_year', 4)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
