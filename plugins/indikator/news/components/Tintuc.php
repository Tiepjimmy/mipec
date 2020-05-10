<?php namespace Indikator\News\Components;

use October\Rain\Exception\AjaxException;
use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Cms\Classes\Page;
use Redirect;
use BackendAuth;
use Lang;

class Tintuc extends ComponentBase
{
	 
    public $listpost;
    public $itempost;
    public $tienichpost;
    public $vitripost;

	public function componentDetails()
	{
		return [
            'name' =>'Tintuc',
            'description' =>'Tin Tức'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $posts = Posts::where('category_id', 1)->where('status', 1);
        $postsvitri = Posts::where('category_id', 2)->where('status', 1);
        $poststienich = Posts::where('category_id', 3)->where('status', 1);
        $this->tienichpost = $poststienich->get()->take(2)->where('status', 1);
        $this->vitripost = $postsvitri->get()->take(4)->where('status', 1);
        $this->listpost = $posts->orderBy('id','published_at')->paginate(10);
         $this->itempost = $posts->take(3)->orderBy('id','desc')->get();
         $this->page['itempost'] = $this->itempost;
         $this->page['vitripost'] = $this->vitripost;
         $this->page['tienichpost'] = $this->tienichpost;
    }
}