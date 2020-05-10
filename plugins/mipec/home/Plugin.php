<?php namespace Mipec\Home;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Mipec\Home\Components\Home'  => 'home',
    		'Mipec\Home\Components\Chuoitienich'  => 'chuoitienich',
            'Mipec\Home\Components\Vitri'  => 'vitri',
            'Mipec\Home\Components\Tongquan'  => 'tongquan',
            'Mipec\Home\Components\Tienich'  => 'tienich',
            'Mipec\Home\Components\Matbang'  => 'nhamau',
            'Mipec\Home\Components\Gia'  => 'giaban',
            'Mipec\Home\Components\Lienhe'  => 'lienhe',
            'Mipec\Home\Components\Logo'  => 'logo',
             'Mipec\Home\Components\Setting'  => 'setting',
    	];
    }

    public function registerSettings()
    {
    }
}
