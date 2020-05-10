<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeLogo3 extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->dropColumn('link');
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->string('link', 150);
        });
    }
}
