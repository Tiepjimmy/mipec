<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Lienhe as NewLienhe;
use Db;
use Illuminate\Database\Eloquent\Model;


class Lienhe extends  ComponentBase
{
    public $lienhe;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Lienhe',
                'description' => 'Liên hệ'
        ];
    }
    public  function onRun()
    {
        $lienhe = $this->lienhe = NewLienhe::all();
        $this->lienhe = $this->page['lienhe'] = $lienhe;
        $this->page->title = 'Liên hệ';
        $this->page->canonical = $this->currentPageUrl();
    }
}