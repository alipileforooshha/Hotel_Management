<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\guest;
use App\Models\hall;
use App\Models\room;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_halls', function (Blueprint $table) {
            $table->foreignIdFor(guest::class);
            $table->foreignIdFor(hall::class);
            $table->date('reserve_start');
            $table->date('reserve_end');
            $table->id();
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
        Schema::dropIfExists('guest_hall');
    }
};
