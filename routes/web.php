<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WebController@index')->name('Index');
Route::get('Product/{ID}', 'WebController@Product')->name('Product');
Route::group(['middleware' => 'auth'] , function (){
    Route::group(['prefix' => 'Buy', 'as' => 'Buy.'], function () {
        Route::get('WishList', 'BuyController@WishListShow')->name('WishListShow');
        Route::get('WishList/{ProductID}', 'BuyController@WishList')->name('WishList');
    });
});


Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => 'Admin'] , function (){
        Route::get('/', 'WebController@Admin')->name('Dashboard');


        Route::group(['prefix' => 'Shop', 'as' => 'Shop.'], function () {
            Route::get('/', 'ShopController@All')->name('All');
            Route::get('All', 'ShopController@All')->name('All');
            Route::get('Add', 'ShopController@Add')->name('Add');
            Route::post('Create', 'ShopController@Create')->name('Create');
            Route::get('Edit/{ID}', 'ShopController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'ShopController@Update')->name('Update');
            Route::get('Delete/{ID}', 'ShopController@Delete')->name('Delete');
        });


        Route::group(['prefix' => 'Category', 'as' => 'Category.'], function () {
            Route::get('/', 'ShopCategoryController@All')->name('Category');
            Route::get('All', 'ShopCategoryController@All')->name('All');
            Route::get('Add', 'ShopCategoryController@Add')->name('Add');
            Route::post('Create', 'ShopCategoryController@Create')->name('Create');
            Route::get('Edit/{ID}', 'ShopCategoryController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'ShopCategoryController@Update')->name('Update');
            Route::get('Delete/{ID}', 'ShopCategoryController@Delete')->name('Delete');
        });



        Route::group(['prefix' => 'Slider', 'as' => 'Slider.'], function () {
            Route::get('/', 'SliderController@All')->name('Slider');
            Route::get('All', 'SliderController@All')->name('All');
            Route::get('Add', 'SliderController@Add')->name('Add');
            Route::post('Create', 'SliderController@Create')->name('Create');
            Route::get('Edit/{ID}', 'SliderController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'SliderController@Update')->name('Update');
            Route::get('Delete/{ID}', 'SliderController@Delete')->name('Delete');
        });



        Route::group(['prefix' => 'Ad', 'as' => 'Ad.'], function () {
            Route::get('/', 'AdsController@All')->name('Ad');
            Route::get('All', 'AdsController@All')->name('All');
            Route::get('Add', 'AdsController@Add')->name('Add');
            Route::post('Create', 'AdsController@Create')->name('Create');
            Route::get('Edit/{ID}', 'AdsController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'AdsController@Update')->name('Update');
            Route::get('Delete/{ID}', 'AdsController@Delete')->name('Delete');
        });




        Route::group(['prefix' => 'Brand', 'as' => 'Brand.'], function () {
            Route::get('/', 'BrandsController@All')->name('Brand');
            Route::get('All', 'BrandsController@All')->name('All');
            Route::get('Add', 'BrandsController@Add')->name('Add');
            Route::post('Create', 'BrandsController@Create')->name('Create');
            Route::get('Edit/{ID}', 'BrandsController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'BrandsController@Update')->name('Update');
            Route::get('Delete/{ID}', 'BrandsController@Delete')->name('Delete');
        });



        Route::group(['prefix' => 'Order', 'as' => 'Order.'], function () {
            Route::get('/', 'BrandsController@All')->name('Order');
            Route::get('All', 'BrandsController@All')->name('All');
            Route::get('Add', 'BrandsController@Add')->name('Add');
            Route::post('Create', 'BrandsController@Create')->name('Create');
            Route::get('Edit/{ID}', 'BrandsController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'BrandsController@Update')->name('Update');
            Route::get('Delete/{ID}', 'BrandsController@Delete')->name('Delete');
        });


        Route::group(['prefix' => 'Users', 'as' => 'Users.'], function () {
            Route::get('/', 'UsersController@All')->name('Slider');
            Route::get('All', 'UsersController@All')->name('All');
            Route::get('Add', 'UsersController@Add')->name('Add');
            Route::post('Create', 'UsersController@Create')->name('Create');
            Route::get('Edit/{ID}', 'UsersController@Edit')->name('Edit');
            Route::put('Update/{ID}', 'UsersController@Update')->name('Update');
            Route::get('Delete/{ID}', 'UsersController@Delete')->name('Delete');
            Route::get('Import', 'UsersController@Import')->name('Import');
            Route::post('Import', 'UsersController@ImportExel')->name('ImportExel');
        });


        Route::group(['prefix' => 'Setting', 'as' => 'Setting.'], function () {
            Route::get('/', 'SiteController@index')->name('Setting');
            Route::post('General', 'SiteController@UpdateSiteGeneral')->name('General');
            Route::post('Social', 'SiteController@UpdateSiteSocial')->name('Social');
            Route::post('Logo', 'SiteController@UpdateSiteIcon')->name('Logo');
        });

        Route::group(['prefix' => 'MyProfile', 'as' => 'MyProfile.'], function () {
            Route::get('/', 'MyProfile@index')->name('MyProfile');
            Route::post('General', 'MyProfile@General')->name('General');
            Route::post('Security', 'MyProfile@Security')->name('Security');
        });
    });
});


Route::get('test', 'GalleryController@index');

Route::post('test', 'GalleryController@Upload')->name('Upload');
Route::post('test2', 'GalleryController@index')->name('Test');
Route::post('test3', 'GalleryController@Test')->name('MyProfile');


Auth::routes(['register' => false]);

