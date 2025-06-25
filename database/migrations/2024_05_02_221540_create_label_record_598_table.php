<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelRecord598Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label_record_589', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lableName', 100);
            $table->string('adress', 100);
            $table->string('city', 100);
            $table->string('country', 100);
            $table->string('establishedYear', 4); 
            $table->string('ceo', 100); 
            $table->string('contact', 100); 
            $table->string('website', 300);
            $table->string('musicGenre', 50); 
            $table->string('famousArtists', 100); 
            $table->string('numberOfAlbums', 3);
            $table->string('revenue', 20);
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
        Schema::dropIfExists('label_record_589');
    }
}
