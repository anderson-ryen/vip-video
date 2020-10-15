<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/959495.xyz/applications/index/view/video/index.html";i:1551816900;}*/ ?>
<?php if(session('power')=='0'){?>

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

</head>
<style>
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        background-color: #1E9FFF !important;
        border-color: #1E9FFF !important;
    }
</style>
<body data-type="index">

<div class="tpl-page-container">


<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
              
                           
               <div class="caption font-green bold">
                      热门电影管理
                    </div>

            </div>
            <div class="panel-body">
                <div class="" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

                    <div class="btn-toolbar">
                        <div class="btn-group focus-btn-group">
                            <a href="<?php echo url('video/add'); ?>">
                                <button class="layui-btn layui-btn-blue"><i class="el-pencil"></i> 添加</button>
                            </a>
                        </div>
                    <div class="btn-toolbar">
                        <div class="btn-group focus-btn-group">
                            <a href="http://www.zuidazy.net/">
                                <button class="layui-btn layui-btn-blue"><i class="el-pencil"></i> 资源采集①</button>
                            </a>
                        </div>                        
                      
                    <div class="btn-toolbar">
                        <div class="btn-group focus-btn-group">
                            <a href="http://okzyw.com/">
                                <button class="layui-btn layui-btn-blue"><i class="el-pencil"></i> 资源采集②</button>
                            </a>
                        </div>  
                                        

                    </div>
  <div class="table-responsive layui-form" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true" style="border: none;">
                    <table cellspacing="0" class="layui-table">
                        <thead>
                        <tr>
                            <th style="width: 120px">图片</th>
                            <th>视频标题</th>
                            <th>播放地址</th>
                            <th>ID</th>

                            <th style="width: 150px">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>

                            <th >
                                <img style="width: 60px; height: 40px" src="<?php echo $vo['img']; ?>">
                            </th>
                            <th >
                                <?php echo $vo['title']; ?>
                            </th>
                            <th >
                                <?php echo $vo['url']; ?>
                            </th>
                            <th >
                                <?php echo $vo['id']; ?>
                            </th>                          
                           <th style=" text-align: center;">

                               <a href="<?php echo url('video/update',['id'=>$vo['id']]); ?>" title="修改"  class="layui-btn layui-btn-xs" >修改</a>
                               &nbsp;
                               <a href="<?php echo url('video/del',['id'=>$vo['id']]); ?>" title="删除" class="layui-btn layui-btn-xs layui-btn-warm">删除</a></th>

                            </td>

                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
</div>
                    <?php echo $list->render(); ?>

                </div>

            </div>


        </div>

    </div>


</div>

<?php echo !empty($code) && $code=='0'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> '.$msg.'
    </div>
</div>

':''; ?>
<?php echo !empty($code) && $code=='1'?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> '.$msg.'.
    </div>
</div>

':''; ?>



</div>
</body>

</html>
<?php }?>