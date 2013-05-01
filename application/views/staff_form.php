			<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="总揽">公司管理</a></li>
						<li class="active">添加员工</li>
					</ul>
				</div>
			</div>	
			
		
			<div id="right_sidebar" class="span6">
				<div class="widget_container">
					<div class="well">
						<div class="navbar navbar-static navbar_as_heading">
							<div class="navbar-inner">
								<div class="container" style="width: auto;">
									<a class="brand">添加员工</a>
								</div>
							</div>
						</div>
						<form>
							<label>Name:</label>
							<input type="text" class="input-xlarge-fluid" placeholder="Category Name">							
							<span class="help-block">The name is how it appears on your site.</span>
							
							<label>Slug:</label>
							<input type="text" class="input-xlarge-fluid" placeholder="Category Slug">							
							<span class="help-block">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
							
							<label>Parent:</label>
							<select name="parent" id="parent" class="input-xlarge-fluid">
								<option value="-1">None</option>
								<option class="level-0" value="1">Breaking News</option>
								<option class="level-0">Headline News</option>
								<option class="level-0">General News</option>
							</select>
							<span class="help-block">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</span>
							
							<label>Description:</label>
							<textarea style="width:90%;height:90px;"></textarea>
							<span class="help-block">The description is not prominent by default; however, some themes may show it.</span>
							
							<button class="btn btn-duadua btn-small"><i class="icon-ok-3"></i> Add New Category</button>
							
						</form>
					</div>
				</div>
			</div>
