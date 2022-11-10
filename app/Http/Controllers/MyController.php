<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class MyController extends Controller
{
    function insert( Request $req ){
        $name = $req->get('pname');
        $price = $req->get('pprice');
        $pimage = $req->file('image')->getClientOriginalName();
        //move upload file
        $req->image->move(public_path('images'),$pimage);

        //step 2 for save data after completing route with csrf token
        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->Pimage = $pimage;
        $prod->save();
        return redirect('/');
    }

    function readdata(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
    function updateordelete(Request $req)
    {
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        if($req->get('update')=='Update'){
            return view('updateview',['pid' =>$id, 'pname'=>$name,'pprice'=>$price ]);
        }else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }
    function update(Request $req)
    {
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        $prod = product::find($id);
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->save();
        return redirect('/');

    }

}
