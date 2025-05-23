<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('licenses', function (Blueprint $table) {
            $table->foreignId('plan_id')->nullable()->after('user_id')->constrained();
        });
    }

    public function down()
    {
        Schema::table('licenses', function (Blueprint $table) {
            $table->dropForeign(['plan_id']);
            $table->dropColumn('plan_id');
        });
    }
};
