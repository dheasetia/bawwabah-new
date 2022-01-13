<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_at_balahmar')->nullable();
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kind_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('other_project_donated_id')->nullable();
            $table->string('hijri_created_day', 2)->nullable();
            $table->string('hijri_created_month', 2)->nullable();
            $table->string('hijri_created_year', 4)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('donation_requested')->default(0);
            $table->integer('audience_num')->default(0);
            $table->integer('donation_approved')->default(0);
            $table->string('donation_purpose')->nullable();
            $table->integer('material_donation_approved')->default(0);
            $table->text('material_donation_detail')->nullable();
            $table->text('material_donation_purpose');
            $table->string('responsible_person')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('execution_date')->nullable();
            $table->string('hijri_execution_day', 2)->nullable();
            $table->string('hijri_execution_month', 2)->nullable();
            $table->string('hijri_execution_year', 4)->nullable();
            $table->string('document_path')->nullable();
            $table->tinyInteger('approval_status')->default(0)->comment('1: partially approved, 2: denied, 3: fully approved, 4: denied sufficiently with prior donations, 5: pended, 6: requested with detail, 7: material donation');
            $table->text('pending_reason')->nullable();
            $table->text('requested_detail')->nullable();
            $table->dateTime('approval_date')->nullable();
            $table->string('hijri_approval_day', 2)->nullable();
            $table->string('hijri_approval_month', 2)->nullable();
            $table->string('hijri_approval_year', 4)->nullable();
            $table->text('ban_reason')->nullable();
            $table->text('video_link')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
