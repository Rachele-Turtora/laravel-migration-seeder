<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('agency', 30);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->tinyInteger('train_code')->unsigned();
            $table->tinyInteger('num_carriages')->unsigned();
            $table->boolean('is_in_time');
            $table->boolean('is_canceled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('agency');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('num_carriages');
            $table->dropColumn('is_in_time');
            $table->dropColumn('is_canceled');
        });
    }
};
