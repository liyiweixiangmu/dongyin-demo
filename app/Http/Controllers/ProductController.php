<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
use Flashy;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');

    }
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit',compact('products'));
    }

    public function store(Request $request)
    {
        $file = $request->file('avatar');
        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'is_hidden' => $request->get('is_hidden'),
        ];


        $destinationPath = 'uploads/products/';
        $filename = Auth::guard('admin')->user()->id.'_'.time();
        $file->move($destinationPath, $filename);
        $data['avatar'] = '/'.$destinationPath.$filename;
        Product::create($data);
        return redirect('admin/products');
    }

    public function save(Request $request,$id)
    {
        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'is_hidden' => $request->get('is_hidden'),
        ];
        if($file = $request->file('avatar')){
            $destinationPath = 'uploads/products/';
            $ext = $file->getClientOriginalExtension();
            $filename = date('Y-m-d-H-i-s') . '-' .uniqid() . "." . $ext;
            $file->move($destinationPath, $filename);
            $data['avatar'] = '/'.$destinationPath.$filename;
        }
        $product = Product::find($id);
        $product->update($data);
        Flashy::primaryDark('修改成功');
        return redirect('admin/products');
    }

    public function delete($id)
    {
        if(Product::findOrFail($id)->delete()){
            Flashy::primaryDark('删除成功');
            return back();
        }
        Flashy::primaryDark('删除失败');
        return back();
    }


}
