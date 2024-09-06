<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSettingColumnsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->boolean('np_switch')->default(0);
            $table->text('np_text');
            $table->text('np_text_color');
            $table->text('np_cta_text');
            $table->text('np_cta_url');
            $table->boolean('np_cta_target')->default(0);
            $table->text('np_cta_text_color');
            $table->text('np_nbg_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
