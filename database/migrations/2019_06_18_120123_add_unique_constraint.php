<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('u_r_l_s', function (Blueprint $table) {
            $table->unique('shortened');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('u_r_l_s', function (Blueprint $table) {
            $table->dropUnique('u_r_l_s_shortened_unique');
        });
    }
}
