<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offices', function(Blueprint $table) {
            $table->foreign('advisor_id')->references('id')->on('advisors');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('city_id')->references('id')->on('cities');

        });
        Schema::table('announcements', function(Blueprint $table) {
            $table->foreign('creator_id')->references('id')->on('users');
        });
        Schema::table('announcement_user', function(Blueprint $table) {
            $table->foreign('announcement_id')->references('id')->on('announcements');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('group_user', function(Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('user_id')->references('id')->on('users');
        });


        Schema::table('messages', function(Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('messages');
            $table->foreign('creator_id')->references('id')->on('users');
        });

        Schema::table('project_approvals', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('projects', function(Blueprint $table) {
            $table->foreign('office_id')->references('id')->on('offices');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kind_id')->references('id')->on('kinds');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('other_project_donated_id')->references('id')->on('projects');
        });
        Schema::table('questionnaire_answers', function(Blueprint $table) {
            $table->foreign('questionnaire_question_id')->references('id')->on('questionnaire_questions');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires');
        });
        Schema::table('questionnaire_questions', function(Blueprint $table) {
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires');
        });
        Schema::table('receipts', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('sms', function(Blueprint $table) {
            $table->foreign('creator_id')->references('id')->on('users');
        });
        Schema::table('recipient_sms', function(Blueprint $table) {
            $table->foreign('recipient_id')->references('id')->on('users');
            $table->foreign('sms_id')->references('id')->on('sms');
        });
        Schema::table('reminders', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('report_pictures', function(Blueprint $table) {
            $table->foreign('report_id')->references('id')->on('reports');
        });
        Schema::table('reports', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('office_id')->references('id')->on('offices');
        });
        Schema::table('trackings', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offices', function(Blueprint $table) {
            $table->dropForeign(['advisor_id']);
            $table->dropForeign(['bank_id']);
            $table->dropForeign(['area_id']);
            $table->dropForeign(['city_id']);
        });
        Schema::table('announcements', function(Blueprint $table) {
            $table->dropForeign(['creator_id']);
        });
        Schema::table('announcement_user', function(Blueprint $table) {
            $table->dropForeign(['announcement_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('group_user', function(Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('messages', function(Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropForeign(['creator_id']);
        });
        Schema::table('project_approvals', function(Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('projects', function(Blueprint $table) {
            $table->dropForeign(['office_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['kind_id']);
            $table->dropForeign(['other_project_donated_id']);
        });
        Schema::table('questionnaire_answers', function(Blueprint $table) {
            $table->dropForeign(['questionnaire_question_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['questionnaire_id']);
        });
        Schema::table('questionnaire_questions', function(Blueprint $table) {
            $table->dropForeign(['questionnaire_id']);
        });
        Schema::table('receipts', function(Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('sms', function(Blueprint $table) {
            $table->dropForeign(['creator_id']);
        });
        Schema::table('recipient_sms', function(Blueprint $table) {
            $table->dropForeign(['recipient_id']);
            $table->dropForeign(['sms_id']);
        });
        Schema::table('reminders', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('report_pictures', function(Blueprint $table) {
            $table->dropForeign(['report_id']);
        });
        Schema::table('reports', function(Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['office_id']);
        });
        Schema::table('trackings', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('connections');
    }
}
