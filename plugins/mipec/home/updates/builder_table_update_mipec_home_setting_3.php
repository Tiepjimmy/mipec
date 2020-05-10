<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeSetting3 extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->string('address', 200)->default('null')->change();
            $table->string('numberphone', 20)->nullable()->unsigned(false)->default('null')->change();
            $table->string('facebook', 200)->default('null')->change();
            $table->string('youtube', 200)->default('null')->change();
            $table->string('copyright_footer', 200)->default('null')->change();
            $table->string('image', 150)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->string('address', 200)->default('\'null\'')->change();
            $table->integer('numberphone')->nullable()->unsigned(false)->default(NULL)->change();
            $table->string('facebook', 200)->default('\'null\'')->change();
            $table->string('youtube', 200)->default('\'null\'')->change();
            $table->string('copyright_footer', 200)->default('\'null\'')->change();
            $table->string('image', 150)->default('NULL')->change();
        });
    }
}
