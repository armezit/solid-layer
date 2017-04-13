<?php

namespace App\Main\Controllers;

class Newsfeed extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function initMiddleware()
    {
        $this->middleware('auth');
    }

    /**
     * GET | This shows the final landing page, in which it is the newsfeed.
     *
     * @return mixed
     */
    public function index()
    {
        return view('newsfeed.showLandingPage');
    }
}