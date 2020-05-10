<?php namespace donhang\Donhang;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    	'Donhang\Donhang\Components\Donhang'  => 'donhang',
   	 ];
    }

    public function registerSettings()
    {
    }
}
