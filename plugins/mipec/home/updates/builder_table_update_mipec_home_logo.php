<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeLogo extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->string('name', 150)->nullable()->default('null');
            $table->string('image', 150)->default('null')->change();
            $table->dropColumn('ten');
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_logo', function($table)
        {
            $table->dropColumn('name');
            $table->string('image', 150)->default('NULL')->change();
            $table->string('ten', 150)->nullable()->default('NULL');
        });
    }
}
