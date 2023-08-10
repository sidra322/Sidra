<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function first_page()
    {

        $posts_data = DB::table('test')->get()->toArray(); // it will get the entire table
        $post=(isset($_POST) && !empty($_POST)) ? $_POST : null;
        if($post){

            DB::table('test')->insert(
                 array(
                        
                        'asdf'   =>   'Dayle'
                 )
            );

        }



        $this->data['title'] = "this is after login page.";

        $this->data['posts_data'] = $posts_data;
        return view('page.first_page', $this->data);
//        return view('home');
    }
}
