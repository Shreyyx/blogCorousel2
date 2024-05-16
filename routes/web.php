<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index_4');
});

Route::get('index_2',[HomeController::class,'index_2'])->name('index_2');
Route::get('index_main',[HomeController::class,'index_main'])->name('index_main');
Route::get('index_2onepage',[HomeController::class,'index_2onepage'])->name('index_2onepage');
Route::get('index_3',[HomeController::class,'index_3'])->name('index_3');
Route::get('index_3onepage',[HomeController::class,'index_3onepage'])->name('index_3onepage');
Route::get('index_4',[HomeController::class,'index_4'])->name('index_4');
Route::get('index_boxed',[HomeController::class,'index_boxed'])->name('index_boxed');
Route::get('index_dark',[HomeController::class,'index_dark'])->name('index_dark');
Route::get('index_onepage',[HomeController::class,'index_onepage'])->name('index_onepage');
Route::get('index_rtl',[HomeController::class,'index_rtl'])->name('index_rtl');
Route::get('industriald_flooring',[HomeController::class,'industriald_flooring'])->name('industriald_flooring');
Route::get('login',[HomeController::class,'login'])->name('login');
Route::get('pricing',[HomeController::class,'pricing'])->name('pricing');
Route::get('pricing_carousel',[HomeController::class,'pricing_carousel'])->name('pricing_carousel');
Route::get('product_details',[HomeController::class,'product_details'])->name('product_details');
Route::get('serviced_carpets_rugs',[HomeController::class,'serviced_carpets_rugs'])->name('serviced_carpets_rugs');
Route::get('serviced_industrial_flooring',[HomeController::class,'serviced_industrial_flooring'])->name('serviced_industrial_flooring');
Route::get('serviced_oak_flooring',[HomeController::class,'serviced_oak_flooring'])->name('serviced_oak_flooring');
Route::get('serviced_tiling_concrete',[HomeController::class,'serviced_tiling_concrete'])->name('serviced_tiling_concrete');
Route::get('serviced_vein_patterns',[HomeController::class,'serviced_vein_patterns'])->name('serviced_vein_patterns');
Route::get('serviced_vinyl_plank',[HomeController::class,'serviced_vinyl_plank'])->name('serviced_vinyl_plank');
Route::get('services',[HomeController::class,'services'])->name('services');
Route::get('services_carousel',[HomeController::class,'services_carousel'])->name('services_carousel');
Route::get('services_carousel2',[HomeController::class,'services_carousel2'])->name('services_carousel2');
Route::get('service_industrial_flooring',[HomeController::class,'service_industrial_flooring'])->name('service_industrial_flooring');
Route::get('services_grid',[HomeController::class,'services_grid'])->name('services_grid');
Route::get('shop',[HomeController::class,'shop'])->name('shop');
Route::get('shop_carousel',[HomeController::class,'shop_carousel'])->name('shop_carousel');
Route::get('shop_details',[HomeController::class,'shop_details'])->name('shop_details');
Route::get('shop_left',[HomeController::class,'shop_left'])->name('shop_left');
Route::get('shop_right',[HomeController::class,'shop_right'])->name('shop_right');
Route::get('team',[HomeController::class,'team'])->name('team');
Route::get('team_carousel',[HomeController::class,'team_carousel'])->name('team_carousel');
Route::get('team_details',[HomeController::class,'team_details'])->name('team_details');
Route::get('work',[HomeController::class,'work'])->name('work');
Route::get('work_carousel',[HomeController::class,'work_carousel'])->name('work_carousel');
Route::get('work_details',[HomeController::class,'work_details'])->name('work_details');
Route::get('work_grid',[HomeController::class,'work_grid'])->name('work_grid');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('blog_carousel',[HomeController::class,'blog_carousel'])->name('blog_carousel');
Route::get('blog_carousel2',[HomeController::class,'blog_carousel2'])->name('blog_carousel2');
Route::get('blog_carousel3',[HomeController::class,'blog_carousel3'])->name('blog_carousel3');
Route::get('blog_details',[HomeController::class,'blog_details'])->name('blog_details');
Route::get('blog_detailsleft',[HomeController::class,'blog_detailsleft'])->name('blog_detailsleft');
Route::get('blog_detailsright/{id}',[HomeController::class,'blog_detailsright'])->name('blog_detailsright');
Route::get('blog_grid',[HomeController::class,'blog_grid'])->name('blog_grid');
Route::get('blog_gridleft',[HomeController::class,'blog_gridleft'])->name('blog_gridleft');
Route::get('blog_gridright',[HomeController::class,'blog_gridright'])->name('blog_gridright');
Route::get('blog_list',[HomeController::class,'blog_list'])->name('blog_list');
Route::get('blog_listleft',[HomeController::class,'blog_listleft'])->name('blog_listleft');
Route::get('blog_listright',[HomeController::class,'blog_listright'])->name('blog_listright');
Route::get('cart',[HomeController::class,'cart'])->name('cart');
Route::get('checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('gallery_carousel',[HomeController::class,'gallery_carousel'])->name('gallery_carousel');
Route::get('gallery_filter',[HomeController::class,'gallery_filter'])->name('gallery_filter');
Route::get('gallery_grid',[HomeController::class,'gallery_grid'])->name('gallery_grid');
Route::get('gallery_grid',[HomeController::class,'gallery_grid'])->name('gallery_grid');
Auth::routes();

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/manage-query', [AdminController::class, 'manage_query'])->name('manage-query');
Route::post('/save-query', [AdminController::class, 'save_query'])->name('save-query');
Route::get('/delete-query', [AdminController::class, 'delete_query'])->name('delete-query');

Route::get('/manage-teams', [AdminController::class, 'manage_teams'])->name('manage-teams');
Route::post('/save-teams', [AdminController::class, 'save_teams'])->name('save-teams');
Route::post('/update-teams/{id}', [AdminController::class, 'update_teams'])->name('update-teams');
Route::get('/delete-teams', [AdminController::class, 'delete_teams'])->name('delete-teams');

Route::get('/manage-gallery', [AdminController::class, 'manage_gallery'])->name('manage-gallery');
Route::post('/save-gallery', [AdminController::class, 'save_gallery'])->name('save-gallery');
Route::post('/update-gallery/{id}', [AdminController::class, 'update_gallery'])->name('update-gallery');
Route::get('/delete-gallery', [AdminController::class, 'delete_gallery'])->name('delete-gallery');

Route::get('/manage-projects', [AdminController::class, 'manage_projects'])->name('manage-projects');
Route::post('/save-projects', [AdminController::class, 'save_projects'])->name('save-projects');
Route::post('/update-projects/{id}', [AdminController::class, 'update_projects'])->name('update-projects');
Route::get('/delete-projects', [AdminController::class, 'delete_projects'])->name('delete-projects');

Route::get('/manage-blogs', [AdminController::class, 'manage_blogs'])->name('manage-blogs');
Route::post('/save-blogs', [AdminController::class, 'save_blogs'])->name('save-blogs');
Route::post('/update-blogs/{id}', [AdminController::class, 'update_blogs'])->name('update-blogs');
Route::get('/delete-blogs', [AdminController::class, 'delete_blogs'])->name('delete-blogs');