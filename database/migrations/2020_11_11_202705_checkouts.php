<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_user_id');
            $table->unsignedBigInteger('ref_book_id');
            $table->dateTime('checkout_date');
            $table->dateTime('due_date');
            $table->dateTime('return_date');
            $table->integer('checked_out_condition');
            $table->integer('checked_in_condition');
            $table->text('status');
            $table->timestamps();

            $table->foreign('ref_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            


            $table->foreign('ref_book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
