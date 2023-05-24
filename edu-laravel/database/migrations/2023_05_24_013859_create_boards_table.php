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
        Schema::create('boards', function (Blueprint $table) {
            // boardNo title, content, delFlag, writeDate, updateDate, deletedDate
            $table->id('bno');
            $table->char('category', 1)->index();
            $table->string('btitle', 100); //varchar(100);
            $table->string('bcontent', 4000);
            $table->timestamps(); //created_at updated_at
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg', 1)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
