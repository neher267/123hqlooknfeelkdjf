<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PublicController@index');
Route::get('contact-us', 'PublicController@contact_us');
Route::get('about-us', 'PublicController@about_us');
Route::get('/{category}/types','PublicController@category_types');
Route::get('{product}/packages', 'PublicController@product_packages');
Route::get('details','PublicController@details');
Route::get('popular-packages','PublicController@popular_packages');

Route::get('language/{locale}', 'PublicController@language_change');

Route::post('logout', 'Auth\SentinelLoginController@logout')->middleware('sentinel.auth');


Route::group(['namespace'=>'Auth', 'middleware'=>['guest']], function(){
	Route::post('login','SentinelLoginController@post_login');
	Route::get('login','SentinelLoginController@login');
});

Route::group(['middleware'=>['sentinel.auth']], function(){
	Route::resource('purchases','PurchaseController');
	Route::get('my-purchases', 'PurchaseController@individualIndex');
});

Route::group(['middleware'=>['sentinel.auth', 'customer']], function(){
	Route::resource('checkout','CheckoutController');
});

Route::group(['namespace'=>'Auth', 'middleware'=>['sentinel.auth']], function(){
	Route::get('dashboard','DashboardController@index');
	Route::get('profile','ProfileController@index');	
});

Route::group(['middleware'=>['sentinel.auth','buyer']], function(){
	Route::resource('packages','PackageController');
	Route::resource('trets','TretController');
	Route::resource('register','Auth\SentinelRegisterController');	
});

Route::group(['namespace'=>'Settings', 'middleware'=>['sentinel.auth']], function(){
	Route::resource('areas','AreaController');
	Route::get('areas/{area}/branches', 'AreaController@branches')->name('area.branches');
	//branch
	Route::resource('branches','BranchController');
	Route::get('branches/{branch}/address/create', 'BranchAddressController@create')->name('branch.address.create');
	Route::post('branches/{branch}/address', 'BranchAddressController@store')->name('branch.address.store');
	Route::get('branches/{branch}/address/edit', 'BranchAddressController@edit')->name('branch.address.edit');
	Route::put('branches/{branch}/address/update', 'BranchAddressController@update')->name('branch.address.update');
	//end branch
	Route::resource('categories','CategoryController');
	Route::get('category/{category}/products', 'CategoryController@products')->name('category.products');
	//category image
	Route::get('categories/{category}/images', 'CategoryImageController@index')->name('category.images.index');
	Route::post('categories/{category}/images', 'CategoryImageController@store')->name('category.images.store');
	Route::get('categories/{category}/images/create', 'CategoryImageController@create')->name('category.images.create');
	//Route::get('categories/{category}/images/{image_id}/edit', 'CategoryImageController@edit')->name('category.images.edit');

	Route::PUT('categories/{category}/images/{image}', 'CategoryImageController@update')->name('category.images.update');
	
	Route::DELETE('categories/{category}/images/{image_id}', 'CategoryImageController@destroy')->name('category.images.destroy');

	/*Route::get('categories/{category}/images/{image_id}/active', 'CategoryImageController@active')->name('category.images.active');
	Route::PUT('categories/{category}/images/{image_id}/dactive', 'CategoryImageController@dactive')->name('category.images.dactive');*/


	//end category image

	Route::resource('departments','DepartmentController');
	Route::get('departments/{department}/categories', 'DepartmentController@categories')->name('department.categories');
	Route::resource('districts','DistrictController');
	Route::get('districts/{district}/areas', 'DistrictController@areas')->name('district.areas');
	Route::resource('roles','RoleController');
	Route::get('roles/{role}/users', 'RoleController@users')->name('role.users');
	
	
});

Route::group(['namespace'=>'Hr', 'middleware'=>['sentinel.auth']], function(){
	Route::resource('stock','StockController');
	Route::resource('trets','TretController');
	Route::resource('avatar','ImageController');
	//expense
	Route::resource('expenses','ExpenseController');
	Route::get('my-expenses', 'ExpenseController@individualIndex');
	//end expense
	Route::resource('products','ProductController');	
	//Product Image
	Route::get('products/{product}/images', 'ProductImageController@index')->name('product.images.index');
	Route::post('products/{product}/images', 'ProductImageController@store')->name('product.images.store');
	Route::get('products/{product}/images/create', 'ProductImageController@create')->name('product.images.create');
	Route::get('products/{product_id}/images/{image_id}/edit', 'ProductImageController@edit')->name('product.images.edit');
	Route::PUT('products/{product}/images/{image}', 'ProductImageController@update')->name('product.images.update');
	Route::DELETE('products/{product_id}/images/{image_id}', 'ProductImageController@destroy')->name('product.images.destroy');
	//end product image		
});

Route::get('{title}/{package}', 'PublicController@package_details');



