<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            //id column
            $table->id();

            //name (varchar 50), desc(text), img (varchar 50 nullable)
             
            $table->string('name', 50);

            // for description in the table
            $table->text('desc');

            $table->string('img', 50)->nullable();


            // created_at , updated_at column
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
        Schema::dropIfExists('cats');
    }
}
