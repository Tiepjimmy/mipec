<?php namespace Mipec\Home\Components;



use Cms\Classes\ComponentBase;
use Mipec\Home\Models\Matbang as NewMatbang;
use Db;
use Illuminate\Database\Eloquent\Model;


class Matbang extends  ComponentBase
{
    public $nhamau;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Tieuchaunbangiaovanhamau',
                'description' => 'Tiêu Chuẩn Bàn Giao và Nhà Mẫu'
        ];
    }
    public  function onRun()
    {
        $nhamau = $this->nhamau = NewMatbang::find(1);
        $this->nhamau = $this->page['nhamau'] = $nhamau;
        $this->page->title = 'Tiêu Chuẩn Bàn Giao và Nhà Mẫu';
        $this->page->canonical = $this->currentPageUrl();
    }
}