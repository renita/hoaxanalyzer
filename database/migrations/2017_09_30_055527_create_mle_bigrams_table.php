<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMleBigramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mle_bigrams', function (Blueprint $table) {
            $table->string('term');
            $table->double('freq');
            $table->double('mle');
            $table->boolean('feature_selection')->default(false);
        });

        Schema::table('mle_bigrams', function($table){
            $table->primary('term');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mle_bigrams');
    }
}
