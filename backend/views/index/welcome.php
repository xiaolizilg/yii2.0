<?php

use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AppAsset;


AppAsset::register($this);

?>

<?php $this->beginPage();?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 图表组合</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
	<?php $this->head();?>
   <!-- <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min.css?v=4.0.0" rel="stylesheet">
	<base target="_blank">-->

</head>

<body class="gray-bg">
<?php $this->beginBody();?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3 class="m-b-md">就诊客户数量</h3>
                        <h2 class="text-navy">
                            <i class="fa fa-group  "></i> 120
                        </h2>
                        <small>更新时间：12天以前</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content ">
                        <h3 class="m-b-md">预约数</h3>
                        <h2 class="text-info">
                                    <i class="fa fa-user-md "></i> 23324
                                </h2>
                        <small>更新时间：12天以前</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3 class="m-b-md">体检报告</h3>
                        <h2 class="text-warning">
                                    <i class="fa fa-file-zip-o"></i> 1234
                                </h2>
                        <small>更新时间：12天以前</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3 class="m-b-md">剩余床位</h3>
                        <h2 class="text-danger">
                                    <i class="fa fa-hotel"></i> 23
                                </h2>
                        <small>更新时间：12天以前</small>
                    </div>
                </div>
            </div>

        </div>
		
		
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>会员数量</h5>
                        <h2>198 009</h2>
                        <div id="sparkline1"></div>
                    </div>
                </div>
            </div>
			
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>公告发布</h5>
                        <h2>65 000</h2>
                        <div id="sparkline2"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>留言板</h5>
                        <h2>680 900</h2>
                        <div id="sparkline3"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>当前时间</h5>
                        <h2>2012-12-23</h2>
                        <div id="sparkline4"></div>
                    </div>
                </div>
            </div>
        </div>
       <!--  <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>使用率</h5>
                        <h2>65%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 68%;" class="progress-bar"></div>
                        </div>

                        <div class="m-t-sm small">4:32更新</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>使用率</h5>
                        <h2>50%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 78%;" class="progress-bar"></div>
                        </div>

                        <div class="m-t-sm small">4:32更新</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>使用率</h5>
                        <h2>14%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                        </div>

                        <div class="m-t-sm small">4:32更新</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>使用率</h5>
                        <h2>20%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                        </div>

                        <div class="m-t-sm small">4:32更新</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>百分比</h5>
                        <h2>42/20</h2>
                        <div class="text-center">
                            <div id="sparkline5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>百分比</h5>
                        <h2>100/54</h2>
                        <div class="text-center">
                            <div id="sparkline6"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>百分比</h5>
                        <h2>685/211</h2>
                        <div class="text-center">
                            <div id="sparkline7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>百分比</h5>
                        <h2>240/32</h2>
                        <div class="text-center">
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>收入</h5>
                        <h1 class="no-margins">886,200</h1>
                        <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                        <small>总收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>本月收入</h5>
                        <h1 class="no-margins">1 738,200</h1>
                        <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                        <small>总收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>本日收入</h5>
                        <h1 class="no-margins">-200,100</h1>
                        <div class="stat-percent font-bold text-danger">12% <i class="fa fa-level-down"></i></div>
                        <small>总收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>搜索有收入</h5>
                        <h1 class="no-margins">54,200</h1>
                        <div class="stat-percent font-bold text-danger">24% <i class="fa fa-level-down"></i></div>
                        <small>总收入</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"> -->
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>预警</h5>
                        <table class="table table-stripped small m-t-md">
                            <tbody>
                                <tr>
                                    <td class="no-borders">
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td class="no-borders">
                                        示例 01
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td>
                                        示例 02
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td>
                                        示例 03
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>项目</h5>
                        <table class="table table-stripped small m-t-md">
                            <tbody>
                                <tr>
                                    <td class="no-borders">
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td class="no-borders">
                                        示例 01
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td>
                                        示例 02
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-navy"></i>
                                    </td>
                                    <td>
                                        示例 03
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>消息</h5>
                        <table class="table table-stripped small m-t-md">
                            <tbody>
                                <tr>
                                    <td class="no-borders">
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td class="no-borders">
                                        示例 01
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        示例 02
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        示例 03
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>通知</h5>
                        <table class="table table-stripped small m-t-md">
                            <tbody>
                                <tr>
                                    <td class="no-borders">
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td class="no-borders">
                                        示例 01
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        示例 02
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        示例 03
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.5"></script>
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.min.js"></script> -->
   <?php $this->endBody();?>
</body>

</html>
<?php $this->endPage();?>