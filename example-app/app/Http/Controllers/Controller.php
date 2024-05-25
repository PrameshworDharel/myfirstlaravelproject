<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
        return view('home.index');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function services()
    {
        return view('home.services');
    }
    public function photos()
    {
        return view('home.photos');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function login()
    {
        return view('home.login');
    }
    public function signup()
    {
        return view('home.signup');
    }
    public function forgotpassword()
    {
        return view('home.forgotpassword');
    }
    public function dashboard()
    {
        return view('dashboard.main');
    }
    public function blogs()
    {
        return view('blogs.blog');
    }
    public function createblogs()
    {
        return view('blogs.createblogs');
    }
    public function editblogs()
    {
        return view('blogs.editblog');
    }
    public function deleteblogs()
    {
        return view('blogs.delete');
    }
}