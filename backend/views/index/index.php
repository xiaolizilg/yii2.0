<?php

use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AppAsset;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>H+ 后台主题UI框架 - 主页</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
	<?php $this->head()?>
		
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<?php $this->beginBody() ?>
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="<?php echo Url::to('@web/static/img/profile_small.jpg');?>" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">xiaolizi</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
									<a  data-toggle="modal" data-target="#myModal">修改密码</a>
                                </li>
									<li class="divider"></li>
                                <li>
									<a class="J_menuItem" href="profile.html">个人资料</a>
                                </li>
                               
									<li class="divider"></li>
                                <li>
									<a href="<?php echo Url::toRoute('site/logout');?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">admin</div>
                    </li>

                     <li>
                        <a class="J_menuItem" href="welcome.html">
                        <i class="fa  fa-home"></i>
                        <span class="nav-label">主页</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="fa fa-columns"></i>
                            <span class="nav-label">页面</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="tables.html" data-index="0">列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="form.html">表单</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="icon.html" >icon图标</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="404.html">404</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="500.html">500</a>
                            </li>
                           
                        </ul>

                    </li>
                   
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
							<i class="fa fa-bars"></i>
						</a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>通知
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
											上次登录时间:2017-8-1
                                            <span class="pull-right text-muted small">ip:(127.0.0.1)</span>
                                        </div>
                                    </a>
                                </li>
                               
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="notifications.html">
                                            <strong>查看记录 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="index_v1.html" class="J_menuItem" data-index="0">
							<i class="fa fa-home"></i> 浏览前台</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作
						<span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo Url::toRoute('site/logout');?>" class="roll-nav roll-right J_tabExit">
					<i class="glyphicon glyphicon-off"></i> 
					退出
				</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo Url::to(['index/welcome']);?>" frameborder="0" data-id="<?php echo Url::to(['index/welcome']);?>" seamless></iframe>
            </div> 
            <div class="footer">
                <div class="pull-right">&copy; 2014-2015 <a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                   
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
		
        <!--右侧边栏结束-->
		
		<!-- 弹框 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			   <div class="modal-content">
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-10">
								<h3 class="m-t-none m-b">修改密码</h3>
								<form role="form">
									<div class="form-group">
										<label>原密码</label>
										<input type="email" placeholder="请输入原密码" class="form-control">
									</div>
									<div class="form-group">
										<label>新密码：</label>
										<input type="password" placeholder="请输入新密码" class="form-control">
									</div>
									<div class="form-group">
										<label>确认密码：</label>
										<input type="password" placeholder="请输入确认密码" class="form-control">
									</div>
									<div>
										<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
										<button class="btn  btn-primary" type="submit">确定
										</button>
									   
									</div>
								</form>
							</div>
						   
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
        <!--返回顶部-->
        <!-- <div id="small-chat">
			<a class="glyphicon glyphicon-menu-up btn-primary btn-circle" onclick="back_top()" title="回到顶部"></a>
        </div> -->
    </div>
   
	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>