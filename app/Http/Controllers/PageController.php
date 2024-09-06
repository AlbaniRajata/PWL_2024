<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2241760080 / Albani Rajata Malik';
    }

    public function articles($id) {
        return 'Halaman artikel ke- ' . $id;
    }
}
