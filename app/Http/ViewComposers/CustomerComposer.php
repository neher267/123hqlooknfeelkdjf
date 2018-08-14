<?php 

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Settings\Category;
use App\Models\Settings\Department;
use App\Models\Hr\Product;

class CustomerComposer
{
	public function compose(View $view)
    {
        $view->with('all_categories', Category::orderBy('name', 'asc')->get());
        $view->with('all_departments', Department::orderBy('name', 'asc')->get());
        $view->with('popular_products', Product::orderBy('hit_count', 'dsc')->limit(8)->get()->chunk(4));
    }
}