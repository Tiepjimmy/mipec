<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Vitri as NewVitri;
use Db;
use Illuminate\Database\Eloquent\Model;


class Vitri extends  ComponentBase
{
    public $vitri;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Vitri',
                'description' => 'Vị trí'
        ];
    }
    public  function onRun()
    {
       $vitri = $this->vitri = NewVitri::all();
       $this->vitri = $this->page['vitri'] = $vitri;
       $this->page->title = 'Vị trí';
        $this->page->canonical = $this->currentPageUrl();
    }
}