<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeLogo2 extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->string('link', 150);
            $table->string('image', 150)->nullable(false)->default(null)->change();
            $table->string('name', 150)->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->dropColumn('link');
            $table->string('image', 150)->nullable()->default('\'null\'')->change();
            $table->string('name', 150)->nullable()->default('\'null\'')->change();
        });
    }
}
