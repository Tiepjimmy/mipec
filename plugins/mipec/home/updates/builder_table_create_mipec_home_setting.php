<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMipecHomeSetting extends Migration
{
    public function up()
    {
        Schema::create('mipec_home_setting', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('address', 200)->nullable();
            $table->integer('numberphone')->nullable();
            $table->string('facebook', 200)->nullable();
            $table->string('youtube', 200)->nullable();
            $table->string('copyright_footer', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mipec_home_setting');
    }
}
