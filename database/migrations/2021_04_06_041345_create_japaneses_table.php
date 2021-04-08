<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJapanesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('japaneses', function (Blueprint $table) {
            $table->id();
	    $table->text('text');
	    $table->string('title') ;
        });

        Schema::table('japaneses', function (Blueprint $table) { 
            $table->foreignId('content_id')->constrained()->onDelete('cascade') ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('japaneses') ;
    }
}
