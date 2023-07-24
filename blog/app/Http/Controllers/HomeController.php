<?php
namespace App\Http\Controllers;
class HomeController extends Controller
{

    public function __construct()
    {
       
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $this->data['title'] = "asdf";
        return view('page.home', $this->data);
    }
}