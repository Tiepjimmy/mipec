<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Home as NewHome;
use Db;
use Illuminate\Database\Eloquent\Model;


class Home extends  ComponentBase
{
    public $home;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Home',
                'description' => 'Trang chủ'
        ];
    }
    public  function onRun()
    {
       $home = $this->home = NewHome::all();
       $this->home = $this->page['home'] = $home;
        $this->page->title = 'Trang chủ';
        $this->page->canonical = $this->currentPageUrl();
    }
}