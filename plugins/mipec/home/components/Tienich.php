<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Tienich as NewTienich;
use Db;
use Illuminate\Database\Eloquent\Model;


class Tienich extends  ComponentBase
{
    public $tienich;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Tienich',
                'description' => 'Tiện ích'
        ];
    }
    public  function onRun()
    {
       $tienich = $this->tienich = NewTienich::all();
       $this->tienich = $this->page['tienich'] = $tienich;
        $this->page->title = 'Tiện ích';
        $this->page->canonical = $this->currentPageUrl();
    }
}