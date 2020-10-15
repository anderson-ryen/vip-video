<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/959495.xyz/applications/index/view/dianka/index.html";i:1555895886;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>代理管理</title>
    <meta name="description" content="">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/static/amz/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/static/amz/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/static/amz/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/static/amz/css/admin.css">
    <link rel="stylesheet" href="/public/static/amz/css/app.css">
    <script src="/public/static/amz/js/echarts.min.js"></script>

    <!--old  下-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/linecons/css/linecons.css">

    <link rel="stylesheet" href="/public/static/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/assets/css/custom.css">

    <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>


    <!--old  上-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">
    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <script src="/public/static/assets1/layui.all.js"></script>
    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <script src="/public/static/assets1/layui.all.js"></script>

</head>
<body data-type="index">

<div class="tpl-page-container">


<div class="row">
    <div class="col-md-12">
<div class="panel panel-default">



            <?php if(session('power')=='1'){?>
            <li class="layui-nav-item  slide-sidebar" style="margin-left: 10px">

                <button class="layui-btn layui-btn-warm" ><?php echo yue(); ?></button>
                <button class="layui-btn layui-btn-normal" onclick="money('0',<?php echo id(); ?>)">点数充值</button>
            </li>
           
            <?php } ?>
            

<br>

  <!--标题-->
         
       <div class="panel-heading">
               <div class="caption font-green bold">
                       生成1个激活码
                    </div>
            </div>
    <!--标题-->
  
    <div class="panel-body">
            <div class="form-group">
                <label class="control-labell" for="field-5"></label>
                <select name="ctime" id="ss" class="form-control">


                    <option value="zhou">周卡，合伙人价<?php echo $price['zhou']; ?>点</option>
                    <option value="yue">月卡，合伙人价<?php echo $price['yue']; ?>点</option>
                    <option value="ji">季卡，合伙人价<?php echo $price['ji']; ?>点</option>
                    <option value="ban">半年卡，合伙人价<?php echo $price['ban']; ?>点</option>
                    <option value="nian">年卡，合伙人价<?php echo $price['nian']; ?>点</option>
                    <option value="zhong">终身卡，合伙人价<?php echo $price['zhong']; ?>点</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" onclick="dangetian()" class="btn btn-success">立即生成</button>
              </br>提示：提卡余额不足请联系在线客服进行充值</br></br> 
</div>
<script>

function dangetian() {
    var ctime   =   $('#ss').val();
    var fen     =   1;
    $.ajax({
        'type'  :   'post',
        'url'   :   '/index/dianka/dangesheng.html',
        'data'  :   {
            'ctime' :   ctime,
            'fen'   :   fen
        },
        'dataType'  :   'json',
        'success'   :   function (msg) {
            if(msg.code=='1')
            {
              
              
 layer.msg('成功！正在跳转…', {
  icon: 1,//提示的样式
  time: 2000, //2秒关闭（如果不配置，默认是3秒）//设置后不需要自己写定时关闭了，单位是毫秒
end:function(){
location.href=('/index/dao/copy.html?jihuoma='+msg.dian);
}
}); 
              

              /*
              layer.alert(msg.dian,{
                    btn:['一键复制','取消'],
                    btn1: function(index, layero){
                        window.open('/index/dao/copy.html?jihuoma='+msg.dian);
                    }
                })
           
              */
            }else{
                layer.msg(msg.dian);
            }
        },
        'error' :   function () {
            layer.alert('服务器错误');
        }
    })
}
  

</script>
      

      
        <?php

foreach($dian as $v)
{
echo $v."<br>";
        }
?>
    </div>

</div>
    </div>

</div>









<div class="row">
    <div class="col-md-12">
<div class="panel panel-default">


  <!--标题-->
         
       <div class="panel-heading">
              
               <div class="caption font-green bold">
                        激活码批量生成（最多100个）
                    </div>

            </div>
       
   
    <!--标题-->
  
  
    <div class="panel-body">
            <div class="form-group">
                <label class="control-labell" for="field-5"></label>
                <select name="ctime" id="sss" class="form-control">

                    
                    <option value="zhou">周卡，合伙人价<?php echo $price['zhou']; ?>点</option>
                     <option value="yue">月卡，合伙人价<?php echo $price['yue']; ?>点</option>
					  <option value="ji">季卡，合伙人价<?php echo $price['ji']; ?>点</option>
                    <option value="ban">半年卡，合伙人价<?php echo $price['ban']; ?>点</option>
                    <option value="nian">年卡，合伙人价<?php echo $price['nian']; ?>点</option>
                   <option value="zhong">终身卡，合伙人价<?php echo $price['zhong']; ?>点</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label class="control-labell" for="field-5">份数</label>
                <input type="number" id="fen" class="form-control" value="" name="fen" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9-]+/,'');}).call(this)" onblur="this.v();">
            </div>

            <div class="form-group">
                <button type="submit" onclick="tian()" class="btn btn-success">批量生成</button>
                <button type="reset" class="btn btn-white">重置</button>
            </div>
<script>
function tian() {
    var ctime   =   $('#sss').val();
    var fen     =   $('#fen').val();
    $.ajax({
        'type'  :   'post',
        'url'   :   '/index/dianka/sheng.html',
        'data'  :   {
            'ctime' :   ctime,
            'fen'   :   fen
        },
        'dataType'  :   'json',
        'success'   :   function (msg) {
            if(msg.code=='1')
            {
                layer.alert(msg.dian,{
                    btn:['txt导出','excel导出','取消'],
                    btn1: function(index, layero){
                        window.open('/index/dao/txt.html?content='+msg.dian);
                    }
                    ,btn2: function(index, layero){
                        window.open('/index/dao/excel.html?content='+msg.dian);
                        return false
                    }
                })
            }else{
                layer.alert(msg.dian);
            }
        },
        'error' :   function () {
            layer.alert('服务器错误');
        }
    })
}
  

</script>
<script>

    function money(status,id){
        if(status=='1')
        {
            var str = 'all';
        }else{
            if(id=='') {
                var str = "";
                $("input:checkbox[name='checkname']:checked").each(function () {
                    str += $(this).val() + ",";
                });

                if (str == '') {
                    return false
                }
            }else{
                var str     =   id
            }
        }


        layer.prompt({title: '请输入充值点数', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                if(pass<1){
                    $('.layui-layer-content').append('<br><span style="color: red">最低起充金额1元</span>')
                    return false;
                }
                window.location.href='http://959495.xyz/daili_pay/?id='+id+'&name=代理自助充点&fee='+pass;
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>
        <?php

foreach($dian as $v)
{
echo $v."<br>";
        }
?>
    </div>

</div>
    </div>

</div>