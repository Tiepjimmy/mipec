<?php namespace Mipec\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMipecHomeSetting6 extends Migration
{
    public function up()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->string('title_seo', 150)->nullable();
            $table->string('description_seo', 150)->nullable();
            $table->string('meta_keyword', 150)->nullable();
            $table->string('image_share', 150)->nullable();
            $table->string('address', 200)->default('null')->change();
            $table->string('numberphone', 20)->default('null')->change();
            $table->string('facebook', 200)->default('null')->change();
            $table->string('youtube', 200)->default('null')->change();
            $table->string('copyright_footer', 200)->default('null')->change();
            $table->string('image', 150)->default('null')->change();
            $table->string('phone', 20)->default('null')->change();
            $table->string('email', 100)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mipec_home_setting', function($table)
        {
            $table->dropColumn('title_seo');
            $table->dropColumn('description_seo');
            $table->dropColumn('meta_keyword');
            $table->dropColumn('image_share');
            $table->string('address', 200)->default('\'null\'')->change();
            $table->string('numberphone', 20)->default('\'null\'')->change();
            $table->string('facebook', 200)->default('\'null\'')->change();
            $table->string('youtube', 200)->default('\'null\'')->change();
            $table->string('copyright_footer', 200)->default('\'null\'')->change();
            $table->string('image', 150)->default('\'null\'')->change();
            $table->string('phone', 20)->default('\'null\'')->change();
            $table->string('email', 100)->default('NULL')->change();
        });
    }
}
