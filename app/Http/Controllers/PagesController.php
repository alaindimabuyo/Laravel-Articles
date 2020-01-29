<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use App\Example;
use Request;
class PagesController extends Controller
{
  public function home(){
      return File::get(public_path('index.php'));
  }
}
