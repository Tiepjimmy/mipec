<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Chuoitienich as NewChuoitienich;
use Db;
use Illuminate\Database\Eloquent\Model;


class Chuoitienich extends  ComponentBase
{
    public $chuoitienich;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Chuoitienich',
                'description' => 'Chuối tiện ích'
        ];
    }
    public  function onRun()
    {
       $chuoitienich = $this->chuoitienich = NewChuoitienich::all();
       $this->chuoitienich = $this->page['chuoitienich'] = $chuoitienich;
    }
}