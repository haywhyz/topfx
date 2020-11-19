<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // redirect admin dashboard
        return view('admin.index');
    }

    public function showUsers()
    {
        // redirect users
        return view('admin.all-users');
    }

    public function showComments()
    {
        // redirect comments
        return view('admin.all-comments');
    }

    public function showTrades()
    {
        // redirect trades
        return view('admin.all-trades');
    }

    public function showCurrency()
    {
        // redirect trades
        return view('admin.all-currency');
    }

    public function addUser()
    {
        // redirect trades
        return view('admin.add-user');
    }

    public function addTrade()
    {
        // redirect trades
        return view('admin.add-trade');
    }

    public function addComment()
    {
        // redirect comment
        return view('admin.add-comment');
    }

    public function addCurrency()
    {
        // redirect currency
        return view('admin.add-currency');
    }
}
