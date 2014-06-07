<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo BASE_URL ?>">
						<? if($info['logo']!=''){?>
							<img src="<?echo $info['logo']?>" alt="<?php echo ucfirst($info['domain'])?>" style="width:102px" class="img-responsive" >
						<?}else{?>
							<?php echo ucfirst($info['domain'])?>
						<?}?>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo BASE_URL ?>">Home</a>
						</li>
						<li><a href="<?php echo BASE_URL ?>contact">Contact us</a></li>
						<li>
							<a href="<?php echo BASE_URL ?>referral">Referrals</a>
						</li>
						<!--<li>
							<a href="<?php// echo BASE_URL ?>jobs">Jobs</a>
						</li>-->
						<li>
							<a href="<?php echo BASE_URL?>postproject">Post a Project</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>