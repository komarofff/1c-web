<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('sites_lists', function (Blueprint $table) {
                $table->id();
                $table-> text('title_rus');
                $table-> text('title_english');
                $table-> text('type');
                $table-> text('alias');
                $table-> longText('description_rus');
                $table-> longText('description_english');
                $table-> text('image_big');
                $table-> text('image_mobile');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites_lists');
    }
}
