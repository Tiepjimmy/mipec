<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMipecHomeLogo extends Migration
{
    public function up()
    {
        Schema::create('mipec_home_logo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ten', 150)->nullable();
            $table->string('image', 150)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mipec_home_logo');
    }
}
