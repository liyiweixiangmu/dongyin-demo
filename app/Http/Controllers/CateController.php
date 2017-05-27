<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;
use Flashy;

class CateController extends Controller
{
    public function __construct(Cate $cate)
    {
        $this->cate = $cate;
    }

    public function index()
    {
        $cates = Cate::get()->toArray();

        $tree = $this->cate->getTree($cates,0);

        $trees =  $this->cate->procHtml($tree);

        return view('cates.index',compact('trees'));
    }

    public function create()
    {
        $cates = Cate::get()->toArray();

        return view('cates.create',compact('cates'));
    }

    public function store(Request $request)
    {
        $data = [
            'pid' => $request->get('pid'),
            'name' => $request->get('name'),
        ];
        Cate::create($data);
        Flashy::primaryDark('添加成功');
        return redirect('admin/cates');
    }

    public function deleteShow()
    {
        $cates = Cate::get()->toArray();

        return view('cates.delete',compact('cates'));
    }
    public function delete($id)
    {
        dd($id);
    }

}
