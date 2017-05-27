@extends('layouts.admin')
@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <form action="{{ url('admin/products/'.$products->id.'/edit') }}" method="post" files="true" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">产品名</label>
                        <input type="text" name="name" class="form-control" placeholder="产品名" value="{{ $products->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="description">描述</label>
                        <input type="text" name="description" class="form-control" placeholder="描述" value="{{ $products->description }}">
                    </div>
                    <div class="form-group">
                        <label for="head" >产品图片</label>
                        <div id="preview">
                            <img src="{{ $products->avatar }}" alt="" id="imghead" class="img-lg " width="100px">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar">上传产品图片</label>
                        <input type="file" name="avatar" class="form-control" placeholder="产品图片" onchange="previewImage(this)">
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="is_hidden"  value="F"  {{ $products->is_hidden == 'F' ? 'checked ="checked"' : '' }}> 上架
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_hidden" value="T"  {{ $products->is_hidden == 'T' ? 'checked ="checked"' : '' }}> 暂不上架
                        </label>
                    </div>
                    <button class="btn btn-success pull-right" type="submit">发布商品</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
            var MAXWIDTH  = 260;
            var MAXHEIGHT = 180;
            var div = document.getElementById('preview');
            if (file.files && file.files[0])
            {
                div.innerHTML ='<img id=imghead>';
                var img = document.getElementById('imghead');
                img.onload = function(){
                    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                    img.width  =  100;
                    img.height =  100;
//                 img.style.marginLeft = rect.left+'px';
                    img.style.marginTop = rect.top+'px';
                }
                var reader = new FileReader();
                reader.onload = function(evt){img.src = evt.target.result;}
                reader.readAsDataURL(file.files[0]);
            }
            else //兼容IE
            {
                var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
                file.select();
                var src = document.selection.createRange().text;
                div.innerHTML = '<img id=imghead>';
                var img = document.getElementById('imghead');
                img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
                div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
            }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;

                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }

            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
    </script>
@endsection