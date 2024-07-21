<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ServicesModel;
use App\Models\PortfolioModel;
class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = HomeModel::all();
        $data['getrecord1'] = AboutModel::all();
        $data['getrecord2'] = ServicesModel::all();
        $data['getrecord3'] = PortfolioModel::all();
        $data['meta_title'] = 'Home';
        $data['className'] = 'home';
        return view('index', $data);
    }

    public function about()
    {
        $data['getrecord1'] = AboutModel::all();
        $data['meta_title'] = 'About';
        $data['className'] = 'about';
        return view('about', $data);
    }

    public function services()
    {
        $data['getrecord2'] = ServicesModel::all();
        $data['meta_title'] = 'Services';
        $data['className'] = 'services';
        return view('services', $data);
    }

    public function portfolio()
    {
        $data['getrecord3'] = PortfolioModel::all();
        $data['meta_title'] = 'Portfolio';
        $data['className'] = 'portfolio';
        return view('portfolio', $data);
    }

    public function contact()
    {
        $data['meta_title'] = 'Contact';
        $data['className'] = 'contact';
        return view('contact', $data);
    }
}
