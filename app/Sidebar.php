<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2017/5/23
 * Time: 16:41
 */

namespace App;
use Menu;

class Sidebar
{
    public function __construct()
    {
        Menu::make('MyNavBar', function($menu){
            $admin = $menu->add('管理员' ,['url' => 'javascript:;' , 'class' => 'tree-toggler nav-header']);
                $admin->add('所有管理员' ,['url' => 'admin' , 'class' => 'tree-toggler nav-header']);
                $admin->add('添加管理员',['url' => 'admin/create' , 'class' => 'tree-toggler nav-header']);
            $product = $menu->add('商品' ,['url' => 'javascript:;' , 'class' => 'tree-toggler nav-header']);
                $product->add('所有商品' ,['url' => 'admin/products' , 'class' => 'tree-toggler nav-header']);
                $product->add('添加商品',['url' => 'admin/products/create' , 'class' => 'tree-toggler nav-header']);
            $cate = $menu->add('分类' ,['url' => 'javascript:;' , 'class' => 'tree-toggler nav-header']);
                $cate->add('所有分类' ,['url' => 'admin/cates' , 'class' => 'tree-toggler nav-header']);
                $cate->add('添加分类',['url' => 'admin/cates/create' , 'class' => 'tree-toggler nav-header']);
                $cate->add('删除分类',['url' => 'admin/cates/delete' , 'class' => 'tree-toggler nav-header']);

        });
    }
}