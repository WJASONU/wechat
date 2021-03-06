<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>管理后台</title>
	<link href="/css/web/bootstrap.min.css" rel="stylesheet">
<link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/css/web/style.css?ver=20170401" rel="stylesheet">
<link href="/plugins/tagsinput/jquery.tagsinput.min.css?ver=20170401" rel="stylesheet">
<link href="/plugins/select2/select2.min.css?ver=20170401" rel="stylesheet"></head>

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
                                   姓名：wechat                                    <a href="/web/user/edit" class="pull-right">编辑</a>
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
</div><div class="row mg-t20 wrap_book_set">
    <div class="col-lg-12">
        <h2 class="text-center">商品设置</h2>
        <div class="form-horizontal m-t">
            <div class="form-group">
                <label class="col-lg-2 control-label">商品分类:</label>
                <div class="col-lg-10">
                    <select name="cat_id" class="form-control">
                        <option value="0">请选择分类</option>
                                                    <option value="2"  >IT</option>
                                                    <option value="1"  >文学</option>
                                            </select>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">商品名称:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="请输入商品名" name="name" value="">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">商品价格:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="请输入商品售价" name="price" value="">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">封面图:</label>
                <div class="col-lg-10">
                    <form class="upload_pic_wrap" target="upload_file" enctype="multipart/form-data" method="POST" action="/web/upload/pic">
                        <div class="upload_wrap pull-left">
                            <i class="fa fa-upload fa-2x"></i>
                            <input type="hidden" name="bucket" value="goods" />
                            <input type="file" name="pic" accept="image/png, image/jpeg, image/jpg,image/gif">
                        </div>
                                            </form>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">商品描述:</label>
                <div class="col-lg-8">
                    <textarea   id="editor"  name="summary" style="height: 300px;"></textarea>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">库存:</label>
                <div class="col-lg-2">
                    <div class="input-group">
                        <div class="input-group-addon hidden">
                            <a class="disabled" href="javascript:void(0);">
                                <i class="fa fa-minus"></i>
                            </a>
                        </div>
                        <input type="text" name="stock" class="form-control" value="1">
                        <div class="input-group-addon hidden">
                            <a href="javascript:void(0);">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-lg-2 control-label">商品标签:</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="tags" value="">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    <input type="hidden" name="id" value="0">
                    <button class="btn btn-w-m btn-outline btn-primary save">保存</button>
                </div>
            </div>
        </div>
    </div>
</div>


	</div>
</div>
</body>
</html>
