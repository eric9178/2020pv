<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCancelledColumnToMissedChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('missed_chats', function (Blueprint $table) {
            $table->boolean('cancelled')->default(0)->after('advisor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('missed_chats', function (Blueprint $table) {
            $table->dropColumn('cancelled');
        });
    }
}
