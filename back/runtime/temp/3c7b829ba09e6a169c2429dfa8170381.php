<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/yy.idc66.xyz/application/index/view/vip/index.html";i:1551816900;}*/ ?>
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


<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">


  <!--标题-->
         
       <div class="panel-heading">
              
               <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 普通用户管理 （数量:<?php echo $count; ?>）
       		  </div>

      </div>
       
   
    <!--标题-->
            <div class="panel-heading">

                <div class="panel-options">


                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>

                    <a href="#" data-toggle="reload">
                        <i class="fa-rotate-right"></i>
                    </a>

                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <div style="text-align: center">
						<form  method="get" action="<?php echo url('vip/index'); ?>">
                        到期时间: <input class="form-control" type="date" name="start" >&nbsp;-&nbsp;<input class="form-control" type="date" name="end" >&nbsp;&nbsp;&nbsp;&nbsp;
                        <hr>
                       
						<textarea class="form-control" placeholder="&nbsp;账户,昵称关键词" type="text" name="key" style="height: 38px"></textarea>
                        <button type="submit" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">搜索</button>
                            <input type="hidden" name="parentid" value="<?php echo $parentid; ?>">
                    </form>
                    </div>
                    <?php if(session('power')=='0'){?><div class="btn-toolbar">  
                        <div class="btn-group focus-btn-group">
                      <!--  
                            <a href="<?php echo url('vip/add'); ?>">
                                <button class="btn btn-default"><i class="el-pencil"></i> 添加</button>
                            </a>
                        </div>
                        <div class="btn-group focus-btn-group">
                        
                            <a onclick="ptime()">
                                <button class="btn btn-default"><i class="el-pencil"></i> 批量添加</button>
                            </a>
                        </div>--><?php } ?>
                        <div class="btn-group dropdown-btn-group pull-right">
                            <?php if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="del('')" class=btn-single">
                                <button class="btn btn-danger" ><i class="el-cancel-circled2"></i>批量删除
                                </button>
                            </a>

                            <a href="javascript:;" onclick="status('1','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star"></i> 批量解封
                                </button>
                            </a>
                            <a href="javascript:;" onclick="status('0','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star-empty"></i>批量封号
                                </button>
                            </a>
                            <?php }?>
                            <!--<a href="javascript:;" onclick="btime('')" class=btn-single">-->
                                <!--<button class="btn btn-warning" ><i class="el-clock"></i> 批量充值时间-->
                                <!--</button>-->
                            <!--</a>-->
                            <?php if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="ctime()" class=btn-single">
                                <button class="btn btn-warning" ><i class="el-clock-circled"></i> 时间补偿
                                </button>
                            </a>
                            <?php }if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="money('0','')" class=btn-single">
                                <button class="btn btn-red" ><i class="el-basket-circled"></i> 批量充值
                                </button>
                            </a>
                              
                             <a href="javascript:;" onclick="tiquhy()" class=btn-single">
                                <button class="btn btn-red" ><i class="el-basket-circled"></i> 提取会员资料
                                </button>
                            </a>
                            <?php }?>
                            <!--<a href="javascript:;" onclick="money('1','')" class=btn-single">-->
                                <!--<button class="btn btn-red" ><i class="el-basket"></i> 全部充值-->
                                <!--</button>-->
                            <!--</a>-->
                        </div>
                    </div>
  <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                        <thead>
                        <tr>
                            <?php if(session('power')=='0'){?>
                            <th style="width: 50px"><input id="checkall" name="checkall" value="全选" type="checkbox" ></th>
                            <th style="width: 50px">ID</th>
                            <?php }?>
                            <th>账户</th>
                            <?php if(session('power')=='0'){?>
                            <th>封号</th>
                            <?php }?>
                            <th>创建时间</th>
                            <th>最后登陆时间</th>
                            <th>会员到期时间</th>
                            <th>归属人</th>
                            <th>登陆次数</th>
                           <th>分享积分</th>
                            <th style="width: 150px">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <?php if(session('power')=='0'){?>
                            <th style="width: 50px">
                               <input name="checkname" value="<?php echo $vo['id']; ?>" type="checkbox" >
                            </th>
                            <th style="width: 50px"><?php echo $vo['id']; ?></th>
                            <?php }?>
                            <td><?php echo $vo['username']; ?></td>
                            <?php if(session('power')=='0'){?>
                            <td><button class="btn btn-gray" onclick="status('<?php echo !empty($vo['status']) && $vo['status']=='1'?'0':'1'; ?>','<?php echo $vo['id']; ?>')"><?php echo !empty($vo['status']) && $vo['status']==='1'?'<span style="color: green"> 封&nbsp;&nbsp;&nbsp;&nbsp;号</span>':'<span style="color: red"> 解封</span>'; ?></button></td>
                       <?php }?>
                            <td><?php echo date("Y-m-d H:i:s",$vo['ctime']); ?></td>
                            <td>

                                <?php
                                    if($vo['logintime']=='0')
                                    {
                                        echo '未登陆';
                                    }else{
                                        echo date('Y-m-d H:i:s',$vo['logintime']);
                                    }
                                ?>


                            </td>
                            <td><button onclick="btime('<?php echo $vo['id']; ?>')" class="btn btn-gray">
                                <?php
                                if($vo['type']=='1')
                                {
                                echo "永久";
                                }else{
                                if($vo['lasttime']=='0')
                                    {
                                        echo '未充值';
                                    }elseif($vo['lasttime']<time()){
                                        echo '<span style="color:red">'.date('Y-m-d H:i:s',$vo['lasttime']).'</span>';
                                }else{
                                echo date('Y-m-d H:i:s',$vo['lasttime']);
                                }
                                }

                                ?></button></td>
                        &nbsp;

                            <td><?php echo $vo['parentid']=='0'?'暂无归属':gui($vo['parentid']) ?></td>
                            <td><?php echo $vo['count']; ?></td>
<td><?php echo $vo['sign']; ?></td>
                            <td>
                                <?php if($vo['parentid']==session('user') || session('power')=='0'){?>  &nbsp;
                             <?php if(session('power')=='0'){?>
   <a href="<?php echo url('vip/update',['id'=>$vo['id']]); ?>" title="修改"> <i class="el-edit"></i></a><?php } }if(session('power')=='0'){?>  &nbsp;
                                <a href="javascript:;" onclick="del('<?php echo $vo['id']; ?>')" title="删除" class=btn-single"><i class="el-trash-circled"></i></a>
                                &nbsp;      &nbsp;
                                <a href="<?php echo url('user/log',['id'=>$vo['id']]); ?>" title="充值日志" class=btn-single">  <i class="el-list"></i></i></a>
                                &nbsp;      &nbsp;
                                <a onclick="omoney('','<?php echo $vo['id']; ?>')" title="扣款"  class=btn-single"> <i class="el-skype"></i></a>
                                <a href="<?php echo url('user/pass_log',['id'=>$vo['id']]); ?>" title="密码修改日志" > <i class="el-edit"></i></a>
<?php }?>


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

<script>
  
  
        function tiquhy() {
        window.open('/index/user/tiquhy.html');
    }
  
    function omoney(status,id){
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


        layer.prompt({title: '请输入扣款金额', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/omoney"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   1
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='1')
                        {

                            window.location.reload();
                        }else{
                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+msg.msg+
                                '' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>



<script>
    $("input[name='checkall']").click(function(){
//判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
        if($(this).is(":checked")){
            $("input[name='checkname']").prop("checked",true);
        }else{
            $("input[name='checkname']").prop("checked",false);
        }
    });
</script>
<?php echo !empty($code) && $code==1?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 添加成功.
    </div>
</div>

':''; ?>


<?php echo !empty($code) && $code==2?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 修改成功.
    </div>
</div>

':''; ?>
<?php echo !empty($code) && $code==3?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 删除成功.
    </div>
</div>

':''; if(session('power')=='0'){?>
<script>
    function del(id){
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
        layer.confirm('您是否删除该数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/delete"); ?>',
                'data'  :   {
                    'id'    :   str
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {
                    if(msg.code=='1')
                    {
                        window.location.reload();
                    }else{
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 删除失败'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                    }


                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>


<script>
    function status(status,id){

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


        layer.confirm('您是否审核通过这些数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/status"); ?>',
                'data'  :   {
                    'id'    :   str,
                    'status':   status
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {

                    window.location.reload();



                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>



<?php }if(session('power')=='0'){?>
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
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/money"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='0')
                        {

                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+ msg.msg+
                                '.请刷新后重试' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }else{
                            window.location.reload();

                        }
                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)

                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>

<?php }?>

<script>
    function ctime(){

        layer.prompt({title: '请输入补充天数', formType: 5}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/ctime"); ?>',
                    'data'  :   {
                        'day'   :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        window.location.reload();

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>
<script>
    function btime(id) {
        if(id=='') {
            var str = "";
            $("input:checkbox[name='checkname']:checked").each(function () {
                str += $(this).val() + "-";
            });

            if (str == '') {
                return false
            }
        }else{
            var str     =   id
        }
		var windowWidth = $('body').width();
		console.log(windowWidth);
		if(windowWidth > 1136){
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['500px', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
			<?php if(session('power')=='0'){?>	' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
			});
		}else{
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['80%', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
			<?php if(session('power')=='0'){?>	' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
			});
		}
        
    }

</script>
<script>
    function pay(id)
    {
        var ctime   =   $('#ctime').val();


        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("user/chong"); ?>',
            'data'  :   {
                'ctime'  :   ctime,
                'id'    :   id
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)

                }else if(msg.code=='1'){

                    window.location.reload();
                }

                layer.closeAll();
                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }

    function ptime() {

        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['80%', '300px'], //宽高
            content: '<div class="form-group style="left:0px"">' +
            ' <label class="control-label">&nbsp;&nbsp;&nbsp;数量</label>' +
            '<input type="number" id="num" class="form-control" name="num"   placeholder="自动生成数量" />' +
            '<br>' +
          <?php if(session('power')=='0'){?>  ' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
            '<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
            ' </select>' +
            ' </div>' +
            '<button class="btn btn-default" onclick="pays()" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
        });
    }

</script>
<script>
    function pays(id)
    {
        var ctime   =   $('#ctime').val();
        var num   =   $('#num').val();
        if(num=='')
        {
            return false;
        }
        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("vip/padd"); ?>',
            'data'  :   {

                'ctime'  :   ctime,
                'num'    :   num
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)


                }else if(msg.code=='1'){
                    layer.closeAll();

                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['500px', '300px'], //宽高
                        content: '<div class="form-group">' +
                        '<p style="margin-left: 20px;color: red">恭喜！批量注册成功！</p>' +
                        msg.msg+
                        '<button class="btn btn-default" onclick="kill()" style="float: right;margin-right: 20px;background-color: #68b828"> 确定</button></div>'
                    });

                }


                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }
</script>
<script>

    function kill()
    {
        layer.closeAll();
    }
    setTimeout("$('#alert').fadeOut(1000)", 2000)
</script>
<div id="del">

</div>