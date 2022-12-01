<?php namespace Acme\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePluginlolsTable extends Migration
{
    public function up()
    {
        Schema::create('acme_blog_pluginlols', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Title');
            $table->text('content');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_blog_pluginlols');
    }
}
