<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $headerLinks = config('db.linkList');
    $comicsCards = config('db.comicsList');
    $NavLinks = config('db.navLinkList');
    $FooterLinkDcComics = config('db.linkFooterDcComics');
    $FooterLinkShop = config('db.linkFooterShop');
    $FooterLinkDclist = config('db.linkFooterDclist');
    $FooterLinkSites = config('db.linkFooterSitesList');


    return view('welcome',compact('headerLinks','comicsCards','NavLinks','FooterLinkDcComics','FooterLinkShop','FooterLinkDclist','FooterLinkSites'));
});
