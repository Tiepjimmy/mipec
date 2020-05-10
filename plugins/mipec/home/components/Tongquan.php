<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Tongquan as NewTongquan;
use Db;
use Illuminate\Database\Eloquent\Model;


class Tongquan extends  ComponentBase
{
    public $tongquan;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Tongquan',
                'description' => 'Tong quan'
        ];
    }
    public  function onRun()
    {
       $tongquan = $this->tongquan = NewTongquan::all();
       $this->tongquan = $this->page['tongquan'] = $tongquan;
       $this->page->title = 'Tổng quan';
        $this->page->canonical = $this->currentPageUrl();
    }
}