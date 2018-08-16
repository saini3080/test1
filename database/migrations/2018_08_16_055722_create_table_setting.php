<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('logo');
            $table->text('admin_email');
            $table->text('address_line_1');
            $table->text('address_line_2');
            $table->text('city');
            $table->text('country');
            $table->text('state');
            $table->text('postcode');
            $table->text('fb_appID');
            $table->text('fd_secretKey');
            $table->text('stripe_appID');
            $table->text('stripe_secretKey');
            $table->text('smtp_host');
            $table->text('smtp_port');
            $table->text('smtp_protocol');
            $table->text('smtp_username');
            $table->text('smtp_password');
            $table->rememberToken();
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
        Schema::dropIfExists('general_setting');
    }
}
