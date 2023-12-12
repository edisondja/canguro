<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coment_threads', function (Blueprint $table) {
            $table->id();
            $table->string("texto");
            $table->unsignedBigInteger("coment_master_id");
            $table->foreign("coment_master_id")->references("id")->on("coments")->onDelete("cascade");
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
        Schema::dropIfExists('coment_threads');
    }
};
