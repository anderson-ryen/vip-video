<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/www/wwwroot/yy.idc66.xyz/application/index/view/admin/update.html";i:1551816900;}*/ ?>
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

    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <script src="/public/static/assets1/layui.all.js"></script>
    <!--old  上-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">

</head>

<body data-type="index">

<div class="tpl-page-container">


<div class="row">
    <div class="col-md-12">
<div class="panel panel-default">


  <!--标题-->
         
       <div class="panel-heading">
              
               <div class="caption font-green bold">
                          管理员修改
                    </div>

            </div>
       
   
    <!--标题-->
  
  
  
  
  
  
  
    <div class="panel-body">

        <form role="form" id="form1" method="post" action="<?php echo url('admin/update'); ?>" class="validate">

            <div class="form-group">
                <label class="control-label">账号</label>

                <input type="text" class="form-control" name="name" data-validate="required,minlength[4],maxlength[18]" value="<?php echo $data['username']; ?>" data-message-required="账号必填,长度最小为4个字符,最大为18个字符" placeholder="账号" />
            </div>

            <div class="form-group">
                <label class="control-label">密码</label>

                <input type="password" class="form-control" id="password" name="password" data-validate="minlength[4],maxlength[18]"  data-message-required="密码必填,长度最小为4个字符,最大为18个字符" placeholder="******" />
            </div>

            <div class="form-group">
                <label class="control-label">确认密码</label>

                <input type="password" class="form-control" name="_password" data-validate="minlength[4],equalTo[#password],maxlength[18]" data-message-required="确认密码必填,长度最小为4个字符,最大为18个字符,并与密码一致" placeholder="******" />
            </div>



            <INPUT type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <INPUT type="hidden" name="page" value="<?php echo $page; ?>">

            <div class="form-group">
                <button type="submit" class="layui-btn layui-btn-blue">提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>

        </form>

    </div>

</div>    </div>

</div>
<?php echo !empty($code) && $code=='err1'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 修改失败 .用户已存在
        .请重新修改
    </div>
</div>

':''; ?>

<?php echo !empty($code) && $code=='err2'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 修改失败
        .请重新修改
    </div>
</div>

':''; ?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>
</div>
</div>
</div>
</div>
</body>

</html>

