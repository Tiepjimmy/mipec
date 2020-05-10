<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Logo as NewLogo;
use Db;
use Illuminate\Database\Eloquent\Model;


class Logo extends  ComponentBase
{
    public $logo;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Logo',
                'description' => ' Logo'
        ];
    }
    public  function onRun()
    {
       $logo = $this->logo = NewLogo::all();
       $this->logo = $this->page['logo'] = $logo;
    }
}