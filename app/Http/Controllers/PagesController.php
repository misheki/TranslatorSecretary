<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = '';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function features(){
        $data = array(
            'title' => 'Features',
            'services' => ['Client Management', 'Project Management', 'Invoice Generation', 'Quotations', 'Alerts']
        );
        return view('pages.features')->with($data);
    }

    public function pricing(){
        $title = 'Pricing';
        return view('pages.pricing')->with('title', $title);
    }
}
