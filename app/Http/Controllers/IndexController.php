<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('is_hidden','F')->
        limit(8)->get();

        return view('dongyin.index',compact('products'));
    }

    public function test()
    {
        $channels = array(
            array('id'=>1,'name'=>"衣服",'parId'=>0),
            array('id'=>2,'name'=>"书籍",'parId'=>0),
            array('id'=>3,'name'=>"T恤",'parId'=>1),
            array('id'=>4,'name'=>"裤子",'parId'=>1),
            array('id'=>5,'name'=>"鞋子",'parId'=>1),
            array('id'=>6,'name'=>"皮鞋",'parId'=>5),
            array('id'=>7,'name'=>"运动鞋",'parId'=>5),
            array('id'=>8,'name'=>"耐克",'parId'=>7),
            array('id'=>9,'name'=>"耐克",'parId'=>3),
            array('id'=>10,'name'=>"鸿星尔克",'parId'=>7),
            array('id'=>11,'name'=>"小说",'parId'=>2),
            array('id'=>12,'name'=>"科幻小说",'parId'=>11),
            array('id'=>13,'name'=>"古典名著",'parId'=>11),
            array('id'=>14,'name'=>"文学",'parId'=>2),
            array('id'=>15,'name'=>"四书五经",'parId'=>14)
        );
            $html = array();
            function getChild(&$html,$parid,$channels,$dep){
                /*    * 遍历数据，查找parId为参数$parid指定的id    */
//                for($i = 0;$i<count($channels);$i++){
//                    if($channels[$i]['parId'] == $parid){
//                        $html[] = array('id'=>$channels[$i]['id'],'name'=>'-'.$channels[$i]['name'],'dep'=>$dep);
//                        getChild($html,$channels[$i]['id'],$channels,$dep+1);
//                    }
//                }
                foreach($channels as $v){
                    if($v['parId'] == $parid){
                        $html[] = $v;
                        getChild($html,$v['id'],$channels,$dep+1);
                    }
                }
                return $html;
            }

        function getTree($data, $pId)
        {
            $tree = '';
            foreach($data as $k => $v)
            {
                if($v['parId'] == $pId)
                {        //父亲找到儿子
                    $v['parId'] = getTree($data, $v['id']);
                    $tree[] = $v;
                    //unset($data[$k]);
                }
            }
            return $tree;
        }
        $tree = getTree($channels, 0);

        $asds =  procHtml($tree);
//        $asds = getChild($html,0,$channels,1);
//        foreach ($asds as $asd){
//            echo $asd['name']."<br> ";
//        }
        return view('dongyin.test',compact('asds'));

    }


}
