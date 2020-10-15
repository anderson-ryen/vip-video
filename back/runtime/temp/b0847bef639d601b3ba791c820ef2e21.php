<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"/www/wwwroot/959495.xyz/applications/index/view/user/add.html";i:1551816900;}*/ ?>
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

<body data-type="index">

<div class="tpl-page-container">


<div class="row">
    <div class="col-md-12">
<div class="panel panel-default">


  <!--标题-->
         
       <div class="panel-heading">
              
               <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 新增代理
       		  </div>

      </div>
       
   
    <!--标题-->
  
    <div class="panel-body">

        <form role="form" id="form1" method="post" action="<?php echo url('user/add'); ?>" class="validate">

            <div class="form-group">
                <label class="control-label">手机号码</label>

                <input type="text" class="form-control" name="name" data-validate="required,minlength[11],maxlength[11]" data-message-required="手机必填,长度最小为4个数字,最大为11个数字" placeholder="输入手机号码" />
            </div>

            <div class="form-group">
                <label class="control-label">密码</label>

                <input type="password" class="form-control" id="password" name="password" data-validate="required,minlength[4],maxlength[18]"  data-message-required="密码必填,长度最小为4个字符,最大为18个字符" placeholder="密码" />
            </div>

            <div class="form-group">
                <label class="control-label">确认密码</label>

                <input type="password" class="form-control" name="_password" data-validate="required,minlength[4],equalTo[#password],maxlength[18]" data-message-required="确认密码必填,长度最小为4个字符,最大为18个字符,并与密码一致" placeholder="确认密码" />
            </div>

            <div class="form-group" id="wei" >
                <label class="control-label">微信</label>

                <input type="text" class="form-control" name="weichat" data-validate="required" value="" data-message-required="微信必填" placeholder="微信" />
            </div>

            <div class="form-group">
                <label class="control-label">姓名</label>

                <input type="text" class="form-control" name="phone" data-validate="required" data-message-required="联系方式必填" placeholder="输入姓名" />
            </div>
            <?php if(session('power')=='1'){?>
            <div class="form-group">
                <label class="control-label">身份</label>


                <select name="power" id="ss"  class="form-control">
                    <option value="1" onclick="dai()" <?php echo !empty($data['power']) && $data['power']=='1'?'selected':''; ?>>开通代理&nbsp;(需扣除二十点)</option>

                </select>

            </div><?php }if(session('power')=='0'){?>
         <!--   <div class="form-group">
                <label class="control-label">推荐码</label>
                <input type="text" class="form-control" name="share_ma"  placeholder="推荐码不能为汉字" />
            </div>--><?php }?>


            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
                <button type="reset" class="btn btn-white">重置</button>
            </div>

        </form>

    </div>

</div>
    </div>

</div>



<?php echo !empty($code) && $code=='err3'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 您的余额不足，请联系管理员充值
    </div>
</div>

':''; ?>
<?php echo !empty($code) && $code=='err1'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 添加失败 .用户已存在
        .请重新添加
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
        <strong> 糟糕 !</strong> 添加失败
        .请重新添加
    </div>
</div>

':''; ?>

<?php echo !empty($code) && $code=='err4'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 推荐码已存在
        .请重新添加
    </div>
</div>

':''; ?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>
<?php }?>

