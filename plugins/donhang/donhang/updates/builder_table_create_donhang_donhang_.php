<?php namespace donhang\Donhang\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDonhangDonhang extends Migration
{
    public function up()
    {
        Schema::create('donhang_donhang_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50)->nullable();
            $table->string('phone', 15);
            $table->string('email', 50)->nullable();
            $table->text('content')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('donhang_donhang_');
    }
}
