<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Gia as NewGia;
use Db;
use Illuminate\Database\Eloquent\Model;


class Gia extends  ComponentBase
{
    public $giaban;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Giaban',
                'description' => 'Giá bán'
        ];
    }
    public  function onRun()
    {
       $giaban = $this->giaban = NewGia::all();
       $this->giaban = $this->page['giaban'] = $giaban;
        $this->page->title = 'Giá bán';
        $this->page->canonical = $this->currentPageUrl();
    }
}