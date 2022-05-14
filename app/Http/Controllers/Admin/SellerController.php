<?php

namespace App\Http\Controllers\Admin;
use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SellerController extends Controller
{
  public function sellerlist (){
      $sellers= Seller::all();
      return view('admin.pages.sellers.list', compact('sellers'));

  }
  public function sellercreate(){
    return view('admin.pages.sellers.form');
  }
  public function sellerstore(Request $request){
    Seller::create([
         
       
        'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'contact'=>$request->contact,
   
    ]);
    return redirect()->route('seller.list');

  }
  public function allData(Request $request){
    if ($request->ajax()){

      $data = Seller::latest()->get();
      return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn ('action',  function($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                <a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
            return $actionBtn;


              })
              ->rawColumns(['action'])
              ->make(true);
    }





  }
}
