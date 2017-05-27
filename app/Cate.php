<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';
    protected $fillable = [
        'id','pid','name'
    ];

    public function getTree($data, $pId)
    {
        $tree = '';
        foreach($data as $k => $v)
        {
            if($v['pid'] == $pId)
            {        //父亲找到儿子
                $v['pid'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
                //unset($data[$k]);
            }
        }
        return $tree;
    }
    public function procHtml($tree)
    {
        $html = '';
        foreach($tree as $t)
        {
            if($t['pid'] == '')
            {
                $html .= "<li class=\"tree-toggler \">
                            <div class='row' style='height:50px;padding:10px 25px;font-size:18px;'>
                                <a href='javascript:;' style='width:20%;'>
                                    {$t['name']}
                                </a>
                                <a href='/admin/cates/".$t['id']."/delete' class='btn btn-danger btn-sm pull-right'>
                                    删除
                                </a>
                            </div>
                          </li>";
            }
            else
            {
                $html .= "<li class=\"tree-toggler nav-header\"><a href='javascript:;' style='font-size: 22px;'>".$t['name']."</a>";
                $html .= $this->procHtml($t['pid']);
                $html = $html."</li>";
            }
        }
        return $html ? '<ul class="nav nav-list">'.$html.'</ul>' : $html ;
    }


}
