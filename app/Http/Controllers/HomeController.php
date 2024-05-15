<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index_2()
    {
        return view ('index_2');
    }

    public function index_2onepage()
    {
        return view ('index_2onepage');
    }

    public function index_3()
    {
        return view ('index_3');
    }

    public function index_3onepage()
    {
        return view ('index_3onepage');
    }

    public function index_4()
    {
        return view ('index_4');
    }

    public function index_main()
    {
        return view ('index_main');
    }
    
    public function index_boxed()
    {
        return view ('index_boxed');
    }

    public function index_dark()
    {
        return view ('index_dark');
    }

    public function index_onepage()
    {
        return view ('index_onepage');
    }

    public function index_rtl()
    {
        return view ('index_rtl');
    }

    public function industriald_flooring()
    {
        return view ('industriald_flooring');
    }

    public function login()
    {
        return view ('login');
    }

    public function pricing()
    {
        return view ('pricing');
    }

    public function pricing_carousel()
    {
        return view ('pricing_carousel');
    }

    public function product_details()
    {
        return view ('product_details');
    }

    public function serviced_carpets_rugs()
    {
        return view ('serviced_carpets_rugs');
    }

    public function serviced_industrial_flooring()
    {
        return view ('serviced_industrial_flooring');
    }

    public function serviced_oak_flooring()
    {
        return view ('serviced_oak_flooring');
    }

    public function serviced_tiling_concrete()
    {
        return view ('serviced_tiling_concrete');
    }

    public function serviced_vein_patterns()
    {
        return view ('serviced_vein_patterns');
    }

    public function serviced_vinyl_plank()
    {
        return view ('serviced_vinyl_plank');
    }

    public function services()
    {
        return view ('services');
    }

    public function services_carousel()
    {
        return view ('services_carousel');
    }

    public function services_carousel2()
    {
        return view ('services_carousel2');
    }

    public function service_industrial_flooring()
    {
        return view ('service_industrial_flooring');
    }

    
    public function services_grid()
    {
        return view ('services_grid');
    }

    public function shop()
    {
        return view ('shop');
    }

    public function shop_carousel()
    {
        return view ('shop_carousel');
    }

    public function shop_details()
    {
        return view ('shop_details');
    }

    public function shop_left()
    {
        return view ('shop_left');
    }

    public function shop_right()
    {
        return view ('shop_right');
    }

    public function team()
    {
        $data = Team::all();
        return view('team', compact('data'));
    }

    public function team_carousel()
    {
        return view ('team_carousel');
    }

    public function team_details()
    {
        return view ('team_details');
    }

    public function work()
    {
        return view ('work');
    }

    public function work_carousel()
    {
        return view ('work_carousel');
    }

    public function work_details()
    {
        return view ('work_details');
    }

    public function work_grid()
    {
        return view ('work_grid');
    }

    public function about()
    {
        return view ('about');
    }

    public function blog_carousel()
    {
        return view ('blog_carousel');
    }

    public function blog_carousel2()
    {
        return view ('blog_carousel2');
    }

    public function blog_carousel3()
    {
        return view ('blog_carousel3');
    }

    public function blog_details()
    {
        return view ('blog_details');
    }

    public function blog_detailsleft()
    {
        return view ('blog_detailsleft');
    }

    public function blog_detailsright()
    {
        return view ('blog_detailsright');
    }

    public function blog_grid()
    {
        return view ('blog_grid');
    }

    public function blog_gridleft()
    {
        return view ('blog_gridleft');
    }

    public function blog_gridright()
    {
        return view ('blog_gridright');
    }

    public function blog_list()
    {
        return view ('blog_list');
    }

    public function blog_listleft()
    {
        return view ('blog_listleft');
    }

    public function blog_listright()
    {
        return view ('blog_listright');
    }

    public function cart()
    {
        return view ('cart');
    }

    public function checkout()
    {
        return view ('checkout');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function faq()
    {
        return view ('faq');
    }

    public function gallery()
    {
        return view ('gallery');
    }

    public function gallery_carousel()
    {
        return view ('gallery_carousel');
    }

    public function gallery_filter()
    {
        return view ('gallery_filter');
    }

    public function gallery_grid()
    {
        $data = Gallery::all();
        return view('gallery_grid', compact('data'));
    }
}