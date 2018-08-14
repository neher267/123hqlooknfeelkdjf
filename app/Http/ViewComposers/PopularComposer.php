<?php 

namespace App\Http\ViewComposers;
use Illuminate\View\View;

class PopularComposer
{
	public function compose(View $view)
    {
        //$view->with('popular_products', Package::orderBy('hit_count', 'dsc')->limit(12)->get()->chunk(4));
    }
}