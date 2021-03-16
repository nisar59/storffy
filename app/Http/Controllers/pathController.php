<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;
class pathController extends Controller
{
    public function index(request $request){
    	$getpath=$request->path();
    	return view("Mamba.index", ['path'=>$getpath]);
}
    public function apply(request $request){
    	$getpath=$request->path();
    	return view("Mamba.apply", ['path'=>$getpath]);
}
    public function contact(request $request){
    	$getpath=$request->path();
    	return view("Mamba.contact-us", ['path'=>$getpath]);
}
    public function faqs(request $request){
    	$getpath=$request->path();
    	return view("Mamba.faqs", ['path'=>$getpath]);
}
    public function about(request $request){
    	$getpath=$request->path();
    	return view("Mamba.about", ['path'=>$getpath]);
}

}
