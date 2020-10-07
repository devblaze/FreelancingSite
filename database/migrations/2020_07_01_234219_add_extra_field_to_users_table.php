<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('surname');
            $table->date('dob');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('post_code');
            $table->string('phone');
            $table->string('mobile');
            $table->double('balance')->default(0);
            $table->integer('access_level')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'surname', 'dob', 'country', 'city', 'address', 'post_code', 'phone', 'mobile', 'balance', 'access_level']);
        });
    }
}
