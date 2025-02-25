<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function siteMap()
    {
        return view('client.site-map');
    }

    public function termsConditions()
    {
        return view('client.terms-conditions');
    }

    public function deliveryInformation()
    {
        return view('client.delivery-information');
    }

    public function privacyPolicy()
    {
        return view('client.privacy-policy');
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function brand()
    {
        return view('client.brand');
    }

    public function category()
    {
        return view('client.category');
    }

    public function checkout()
    {
        return view('client.checkout');
    }

    public function giftCirtificate()
    {
        return view('client.gift-cirtificate');
    }

    public function established()
    {
        return view('client.established');
    }

    public function establishedFact()
    {
        return view('client.established-fact');
    }

    public function packages()
    {
        return view('client.packages');
    }

    public function productComparison()
    {
        return view('client.product-comparison');
    }

    public function product()
    {
        return view('client.product');
    }

    public function shop()
    {
        return view('client.shop');
    }

    public function cart()
    {
        return view('client.cart');
    }

    public function standardLorem()
    {
        return view('client.standard-lorem');
    }

    public function variations()
    {
        return view('client.variations');
    }

    public function getSome()
    {
        return view('client.get-some');
    }
}
