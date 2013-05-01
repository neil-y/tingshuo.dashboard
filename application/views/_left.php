	
			<!-- sidebar -->
			<div id="sidebar" class="span2">			
				<div class="accordion custom-acc" id="accordionSB">

					<div class="accordion-group <?php if($menu == 'welcome') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#dashboardsb">
								<i class="icon-large icon-th-large head_icon"></i>总揽
							</a>
						</div>
						<div id="dashboardsb" class="accordion-body collapse  <?php if($menu == 'welcome') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'welcome_stat') echo 'class="active"';?>><a href="/welcome/index"><i class="icon-large icon-th"></i>网站数据</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#articlesb">
								<i class="icon-large icon-th-large head_icon"></i>用户
							</a>
						</div>
						<div id="articlesb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="articles.html"><i class="icon-large icon-th"></i>用户列表</a></li>
									<li><a href="articles.html"><i class="icon-large icon-th"></i>签名列表</a></li>
									<li><a href="articles.html"><i class="icon-large icon-th"></i>黑名单</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#pagesb">
								<i class="icon-large icon-th-large head_icon"></i>信息
							</a>
						</div>
						<div id="pagesb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="pages.html"><i class="icon-large icon-th"></i>信息列表</a></li>
								</ul>
							</div>
						</div>
					</div>					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#commentsb">
								<i class="icon-large icon-th-large head_icon"></i>评论
							</a>
						</div>
						<div id="commentsb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="comments.html"><i class="icon-large icon-th"></i>评论列表</a></li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#reportsb">
								<i class="icon-large icon-th-large head_icon"></i>群组
							</a>
						</div>
						<div id="reportsb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="field-reports.html"><i class="icon-large icon-th"></i>群组列表</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#mediasb">
								<i class="icon-large icon-th-large head_icon"></i>消息
							</a>
						</div>
						<div id="mediasb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>消息列表</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#feedback">
								<i class="icon-large icon-th-large head_icon"></i>反馈
							</a>
						</div>
						<div id="feedback" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>反馈列表</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#baseinfo">
								<i class="icon-large icon-th-large head_icon"></i>基础数据
							</a>
						</div>
						<div id="baseinfo" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>学校列表</a></li>
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>添加学校</a></li>
								</ul>
							</div>
						</div>
					</div>


					<div class="accordion-group  <?php if($menu == 'staff') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#companyinfo">
								<i class="icon-large icon-th-large head_icon"></i>公司管理
							</a>
						</div>
						<div id="companyinfo" class="accordion-body collapse  <?php if($menu == 'staff') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>公司信息</a></li>
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>员工列表</a></li>
									<li <?php if($sub_menu == 'staff_form') echo 'class="active"';?>><a href="/staff/form"><i class="icon-large icon-th"></i>添加员工</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div><!-- sidebar -->
	
