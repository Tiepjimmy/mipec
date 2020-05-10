<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeSetting extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->string('address', 200)->default('null')->change();
            $table->integer('numberphone')->default(null)->change();
            $table->string('facebook', 200)->default('null')->change();
            $table->string('youtube', 200)->default('null')->change();
            $table->string('copyright_footer', 200)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->string('address', 200)->default('NULL')->change();
            $table->integer('numberphone')->default(NULL)->change();
            $table->string('facebook', 200)->default('NULL')->change();
            $table->string('youtube', 200)->default('NULL')->change();
            $table->string('copyright_footer', 200)->default('NULL')->change();
        });
    }
}
