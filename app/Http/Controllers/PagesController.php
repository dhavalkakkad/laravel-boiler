<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
  public function about()
  {
  $name = "DK";
    return view('about')->with([
           'fname' => 'Dhaval',
            'lname' => 'Kakkad'
            ]);
  }


}
