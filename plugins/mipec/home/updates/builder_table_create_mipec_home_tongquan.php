<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMipecHomeTongquan extends Migration
{
    public function up()
    {
        Schema::create('mipec_home_tongquan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 150)->nullable();
            $table->text('content')->nullable();
            $table->string('image', 150)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mipec_home_tongquan');
    }
}
