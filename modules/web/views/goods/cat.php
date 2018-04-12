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
                <li class="goods">
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
                                   姓名：wecaht                                    <a href="/web/user/edit" class="pull-right">编辑</a>
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
								<li  >
					<a href="/web/goods/index">商品列表</a>
				</li>
								<li  class="current"  >
					<a href="/web/goods/cat">分类列表</a>
				</li>
								<li  >
					<a href="/web/goods/images">图片资源</a>
				</li>
							</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<form class="form-inline wrap_search">
			<div class="row  m-t p-w-m">
				<div class="form-group">
					<select name="status" class="form-control inline">
						<option value="-1">请选择状态</option>
						                            <option value="1"  >正常</option>
						                            <option value="0"  >已删除</option>
											</select>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-lg-12">
					<a class="btn btn-w-m btn-outline btn-primary pull-right" href="/web/goods/cat_set">
						<i class="fa fa-plus"></i>分类
					</a>
				</div>
			</div>

		</form>
		<table class="table table-bordered m-t">
			<thead>
			<tr>
				<th>序号</th>
				<th>分类名称</th>
				<th>状态</th>
				<th>权重</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
                                            <tr>
                    <td>1</td>
                    <td>文学</td>
                    <td>已删除</td>
                    <td>4</td>
                    <td>
                                                    <a class="m-l recover" href="javascript:void(0);" data="1">
                                <i class="fa fa-rotate-left fa-lg"></i>
                            </a>
                                            </td>
                </tr>
                                <tr>
                    <td>2</td>
                    <td>IT</td>
                    <td>正常</td>
                    <td>1</td>
                    <td>
                                                    <a class="m-l" href="/web/goods/cat_set?id=2">
                                <i class="fa fa-edit fa-lg"></i>
                            </a>

                            <a class="m-l remove" href="javascript:void(0);" data="2">
                                <i class="fa fa-trash fa-lg"></i>
                            </a>
                                            </td>
                </tr>
                            			</tbody>
		</table>
	</div>
</div>

	</div>
</div>
</body>
</html>