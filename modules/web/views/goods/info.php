<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>管理后台</title>
	<link href="/css/web/bootstrap.min.css" rel="stylesheet">
<link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/css/web/style.css?ver=20170401" rel="stylesheet"></head>

<body>
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu">
				<li class="nav-header">
					<div class="profile-element text-center">
                        <img alt="image" class="img-circle" src="/images/web/vatar.png" />
                        <p class="text-muted">公众号</p>
					</div>
					<div class="logo-element">
                        <img alt="image" class="img-circle" src="/images/web/vatar.png" />
					</div>
				</li>
				<li class="account">
					<a href="/web/account/index"><i class="fa fa-user fa-lg"></i> <span class="nav-label">账号管理</span></a>
				</li>
                <li class="book">
                    <a href="/web/goods/index"><i class="fa fa-book fa-lg"></i> <span class="nav-label">商品管理</span></a>
                </li>
                <li class="member">
                    <a href="/web/member/index"><i class="fa fa-group fa-lg"></i> <span class="nav-label">会员列表</span></a>
                </li>
                <li class="finance">
                    <a href="/web/finance/index"><i class="fa fa-rmb fa-lg"></i> <span class="nav-label">财务管理</span></a>
                </li>
                <li class="stat">
                    <a href="/web/stat/index"><i class="fa fa-bar-chart fa-lg"></i> <span class="nav-label">统计管理</span></a>
                </li>
			</ul>

		</div>
	</nav>

	<div id="page-wrapper" class="gray-bg" style="background-color: #ffffff;">
		<div class="row border-bottom">
			<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0);"><i class="fa fa-bars"></i> </a>

				</div>
				<ul class="nav navbar-top-links navbar-right">
					<li>
						<span class="m-r-sm text-muted welcome-message">
                            欢迎使用微信商城管理后台
                        </span>
					</li>
					<li class="hidden">
						<a class="count-info" href="javascript:void(0);">
							<i class="fa fa-bell"></i>
                            <span class="label label-primary">8</span>
						</a>
					</li>


					<li class="dropdown user_info">
						<a  class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
                            <img alt="image" class="img-circle" src="/images/web/avatar.png" />
						</a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                   姓名：wecaht                                   
                                   <a href="/web/user/edit" class="pull-right">编辑</a>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                   手机号码：1XX12345679                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="link-block text-center">
                                    <a class="pull-left" href="/web/user/reset-pwd">
                                        <i class="fa fa-lock"></i> 修改密码
                                    </a>
                                    <a class="pull-right" href="/web/user/logout">
                                        <i class="fa fa-sign-out"></i> 退出
                                    </a>
                                </div>
                            </li>
                        </ul>
					</li>

				</ul>

			</nav>
		</div>
		<div class="row  border-bottom">
	<div class="col-lg-12">
		<div class="tab_title">
			<ul class="nav nav-pills">
								<li  class="current"  >
					<a href="/web/goods/index">商品列表</a>
				</li>
								<li  >
					<a href="/web/goods/cat">分类列表</a>
				</li>
								<li  >
					<a href="/web/goods/images">图片资源</a>
				</li>
							</ul>
		</div>
	</div>
</div><style type="text/css">
	.wrap_info img{
		width: 70%;
	}
</style>
<div class="row m-t wrap_info">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="m-b-md">
											<a class="btn btn-outline btn-primary pull-right" href="/web/goods/set?id=1">
							<i class="fa fa-pencil"></i>编辑
						</a>
										<h2>商品信息</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="m-t">商品名称：计算机原理</p>
				<p>商品售价：86.08</p>
				<p>库存总量：5</p>
				<p>商品标签：教科书,计算机</p>
				<p>封面图：<img src="/uploads/book/20170301/7a976289c2c1f551a4f21232575ba255.jpg" style="width: 50px;height: 50px;"/> </p>
				<p>商品描述：<p><span style="color: rgb(51, 51, 51); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);">《</span><span style="color: rgb(204, 0, 0); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);">计算机原理</span><span style="color: rgb(51, 51, 51); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);">》《计算机原理》是为中等职业学校编写的教材，根据教育部最新颁布的《中等职业学校计算机原理教学基本要求》编写，充分考虑了中等职业教育的特点。
                    《计算机原理》主要内容由计算机基础知识、数据在计算机中的表示、指令系统、典型微处理器、存储器系统、总线系统、输入／输出系统与中断等7个模块组成，内容由浅入深，可供中等职业学校计算机类各专业使用。</span></p><p><span style="color: rgb(51, 51, 51); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);"><br/></span></p><p><span style="color: rgb(51, 51, 51); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);"><img src="/uploads/book/20170301/9ff354fe52dc26f672d7f94a58f6a2f4.jpg"/></span></p><p><span style="color: rgb(51, 51, 51); font-family: arial; font-size: 13px; background-color: rgb(255, 255, 255);"><img src="/uploads/book/20170301/e9a3909b1c2db975d1b3c21c249c684e.jpg"/></span></p></p>
			</div>
		</div>
        <div class="row m-t">
            <div class="col-lg-12">
                <div class="panel blank-panel">
                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-1" data-toggle="tab" aria-expanded="false">销售历史</a>
                                </li>
                                <li>
                                    <a href="#tab-2" data-toggle="tab" aria-expanded="true">库存变更</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>会员名称</th>
                                        <th>购买数量</th>
                                        <th>购买价格</th>
                                        <th>订单状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
																			                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-03-16 16:24:37</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-03-16 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-03-15 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-03-14 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-03-13 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-03-12 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-03-11 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-03-10 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-03-09 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-03-08 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-03-07 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-03-06 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-03-05 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-03-04 16:24:10</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-03-03 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-03-02 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-03-01 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-02-28 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-27 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-02-26 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-25 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-02-24 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-02-23 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-02-22 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-21 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-20 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-19 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-18 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-02-17 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-16 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-02-15 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-14 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-13 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-02-12 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-02-11 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-02-10 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-02-09 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-02-08 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-02-07 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-06 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-02-05 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-02-04 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-03 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-02 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-02-01 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-31 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-01-30 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-29 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-28 16:24:09</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-27 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-01-26 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-01-25 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-24 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-23 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-22 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-21 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-20 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-19 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-18 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-17 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-16 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-15 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-14 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-13 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-01-12 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-01-11 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-10 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-09 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-08 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-07 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-06 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-05 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-04 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-01-03 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-02 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-01-01 16:24:08</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-03-16 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-03-15 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-03-14 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-03-13 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-03-12 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-03-11 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-03-10 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-03-09 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-03-08 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-03-07 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-03-06 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-03-05 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-03-04 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-03-03 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-03-02 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-03-01 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-02-28 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-27 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-26 15:56:35</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-25 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-24 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-23 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-02-22 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-02-21 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-02-20 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-19 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-18 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-02-17 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-16 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-02-15 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-14 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-13 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-02-12 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-02-11 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-10 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-09 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-02-08 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-02-07 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-06 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-02-05 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-02-04 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-02-03 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-02-02 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>6</td>
                                                <td>533.28</td>
                                                <td>2017-02-01 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-31 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-30 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-29 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-28 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-27 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-01-26 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-25 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-24 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-23 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-22 15:56:34</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-01-21 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-20 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-19 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-18 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-01-17 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                         小明                                                                                                                                           </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-16 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        韩梅梅                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-15 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        李雷                                                                                                    </td>
                                                <td>4</td>
                                                <td>355.52</td>
                                                <td>2017-01-14 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小刚                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-13 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小红                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-01-12 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小明                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-11 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小米                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-10 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        张三                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-09 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        王五                                                                                                    </td>
                                                <td>2</td>
                                                <td>177.76</td>
                                                <td>2017-01-08 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        李四                                                                                                    </td>
                                                <td>3</td>
                                                <td>266.64</td>
                                                <td>2017-01-07 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        张三                                                                                                    </td>
                                                <td>1</td>
                                                <td>88.88</td>
                                                <td>2017-01-06 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        小七                                                                                                    </td>
                                                <td>7</td>
                                                <td>622.16</td>
                                                <td>2017-01-05 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        朱六                                                                                                    </td>
                                                <td>10</td>
                                                <td>888.80</td>
                                                <td>2017-01-04 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        王五                                                                                                    </td>
                                                <td>8</td>
                                                <td>711.04</td>
                                                <td>2017-01-03 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        李四                                                                                                    </td>
                                                <td>5</td>
                                                <td>444.40</td>
                                                <td>2017-01-02 15:56:33</td>
                                            </tr>
										                                            <tr>
                                                <td>
                                                                                                        张三                                                                                                    </td>
                                                <td>9</td>
                                                <td>799.92</td>
                                                <td>2017-01-01 15:56:33</td>
                                            </tr>
																			                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>变更</th>
                                        <th>备注</th>
                                        <th>时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                                                                                                                    <tr>
                                                    <td>-1</td>
                                                    <td>在线购买</td>
                                                    <td>2017-03-12 15:24:04</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>-1</td>
                                                    <td>在线购买</td>
                                                    <td>2017-03-12 15:17:51</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>1</td>
                                                    <td>在线购买</td>
                                                    <td>2017-03-07 18:35:43</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>1</td>
                                                    <td>在线购买</td>
                                                    <td>2017-03-07 18:35:43</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>1</td>
                                                    <td>在线购买</td>
                                                    <td>2017-03-07 18:35:43</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>-1</td>
                                                    <td></td>
                                                    <td>2017-03-07 18:04:21</td>
                                                </tr>
                                                                                            <tr>
                                                    <td>5</td>
                                                    <td></td>
                                                    <td>2017-03-07 18:04:10</td>
                                                </tr>
                                                                                                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

	</div>
</div>
</body>
</html>
