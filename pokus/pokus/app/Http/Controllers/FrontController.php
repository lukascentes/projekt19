<?php
/**
 * Created by PhpStorm.
 * User: 3gali
 * Date: 05.11.2019
 * Time: 10:04
 */

namespace App\Http\Controllers;


class FrontController extends Controller
{
    public function index(){
        return view('frontView.home.homeContent');
    }

}