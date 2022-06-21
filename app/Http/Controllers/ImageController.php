<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{

  public function index(){
   return view ('image');
   // dd($img);
}


  public function store(Request $request){
   $img = $request->imgpath;  //formで設置したname名
 //$img=$request->file(imgpath); fileメソッドを使うとファイル？だけが取れるそうだが変わらなかったので使っても使わなくてもどっちでも良いと思う。

   dd($img);
}


}
