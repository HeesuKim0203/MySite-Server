<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contents', function (Blueprint $table) {
            $table->id() ;
            $table->string('image_url') ;
            $table->string('title') ;
            $table->text('text') ;
            $table->string('type') ;
            $table->timestamps() ;
        });

        // Schema::table('contents', function (Blueprint $table) { 
        //     $table->foreignId('comment_id')->constrained()->onDelete('cascade') ; 
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
