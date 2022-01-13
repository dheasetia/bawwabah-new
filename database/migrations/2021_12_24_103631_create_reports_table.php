<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->string('name');
            $table->string('hijri_created_day', 2)->nullable();
            $table->string('hijri_created_month', 2)->nullable();
            $table->string('hijri_created_year', 4)->nullable();
            $table->integer('nth')->default(1);
            $table->string('document_path')->nullable();
            $table->string('file_type')->nullable();
            $table->string('video_link')->nullable();
            $table->date('report_from');
            $table->string('hijri_report_from_day', 2)->nullable();
            $table->string('hijri_report_from_month', 2)->nullable();
            $table->string('hijri_report_from_year', 4)->nullable();

            $table->date('report_to');
            $table->string('hijri_report_to_day', 2)->nullable();
            $table->string('hijri_report_to_month', 2)->nullable();
            $table->string('hijri_report_to_year', 4)->nullable();
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
        Schema::dropIfExists('reports');
    }
}
