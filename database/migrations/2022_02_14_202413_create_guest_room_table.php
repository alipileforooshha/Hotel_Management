<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\guests;
use App\Models\halls;
use App\Models\rooms;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_room', function (Blueprint $table) {
            $table->foreignIdFor(guests::class);
            $table->foreignIdFor(rooms::class);
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
        Schema::dropIfExists('guest_room');
    }
};
