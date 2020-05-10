<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Setting as NewSetting;
use Db;
use Illuminate\Database\Eloquent\Model;


class Setting extends  ComponentBase
{
    public $setting;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Setting',
                'description' => '  Cài đặt'
        ];
    }
    public  function onRun()
    {
       $setting = $this->setting = NewSetting::find(1);
       $this->setting = $this->page['setting'] = $setting;
    }
}