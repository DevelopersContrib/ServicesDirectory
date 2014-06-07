<?php  
    include('header.php');
?>
	<body>
		<?php include('navigation.php');?>
		<div class="section1">
			<div class="container text-center project">
				<div class="wrap-menu-content">
					<div id="estimate_display" class="row content-menu active">
						<div class="col-lg-6 col-lg-offset-3">
							<h1>
								Get an Estimate!
								
							</h1>
						</div>
						<div class="col-lg-8 col-lg-offset-2 form-project">
							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<select name="proj_types" id="proj_types" class="form-control input-lg">
											<option value="0">Project Type</option>
											<?php 				
												foreach($projecttypes as $array)
												{
													foreach($array as $key => $info2)
													{
													  echo '<option value="'.$info2['ProjectTypeId'].'" name='.$info2['Name'].'>'.$info2['Name'].'</option>';
													}
												}	
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="form-group">
										<label for="zip" class="sr-only">ZIP</label>
										<input placeholder="ZIP" type="text" class="form-control input-lg" id="zipcodes2">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<a href="javascript:;" id="estiredirect" class="btn btn-primary btn-lg btn-block">Go!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="expert_display" class="row content-menu" style="display:none;">
						<div class="col-lg-6 col-lg-offset-3">
							<h1>Ask an Expert</h1>
						</div>
						<div class="col-lg-6 col-lg-offset-3 form-project form-blue">
							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<select name="proj_cat" id="proj_cat" class="form-control input-lg">
											<option value="0">Category</option>
											<?php 				
												foreach($projecttypes as $array)
												{
													foreach($array as $key => $info2)
													{
													  echo '<option value="'.$info2['ProjectTypeId'].'">'.$info2['Name'].'</option>';
													}
												}	
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="form-group">
										<label for="" class="sr-only">Ask</label>
										<input placeholder="Ask" type="text" class="form-control input-lg">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<a href="javascript:;" class="btn btn-danger btn-lg btn-block" id="askredirect">Go!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row nav-menu">
					<div class="col-lg-6 col-lg-offset-3">
						<div class="row wrap-menu-nav">
							<div id="esticlass" class="col-lg-6 sub-menu active">
								<a href="javascript:;" id="estimate"><i class="fa fa-fax "></i> Get an Estimate</a>
							</div>
							<div id="askclass" class="col-lg-6 sub-menu">
								<a href="javascript:;" id="expert"><i class="fa fa-info-circle "></i> Ask an Expert</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="section2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>Get Matched to a Screened Professional Handyman</h1>
						<p><?php echo ucfirst($info['domain'])?> helps you find an experienced, professional Handyman contractor in your local area, FREE, NO OBLIGATIONS. <?php echo ucfirst($info['domain'])?> is the industry leading portal for the home improvement, home repair and remodeling industry. Our free tools and services help both homeowners and contractors facilitate the process to accomplish your home repair and remodeling needs. Serving the Home and Contractor market. Why use our pros?</p>
						<p>For the commercial real estate market or projects over $5,000, <?php echo ucfirst($info['domain'])?> offers a free consultation service to analyze your needs and find suppliers, general contractors and local professional service providers. Are you lacking a professional website or want to communicate more efficiently with your customer or contractor? Get a Free Webpage and Free Consultation and manage it online. Need professional and experienced contractors, subcontractors or handymen due to an increase in your work load? You have come to the right place at <?php echo ucfirst($info['domain'])?>, your local referral and local handyman service provider.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section3">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 f1">
						<a href="<?php echo BASE_URL; ?>postproject" class="feature-link text-center">
							post a project
							<span class="meta-desc">Home owner post your project free<i class="fa fa-angle-right"></i></span>
						</a>
					</div>
					<div class="col-lg-3 f2">
						<a href="http://handyman.com/contractor/find" class="feature-link text-center">
							FIND CONTRACTOR
							<span class="meta-desc">Contractors in Your Area Now  <i class="fa fa-angle-right"></i></span>
						</a>
					</div>
					<div class="col-lg-3 f3">
						<a href="http://handyman.com/project/find" class="feature-link text-center">
							FIND PROJECT
							<span class="meta-desc">Get Contractor Projects  <i class="fa fa-angle-right"></i></span>
						</a>
					</div>
					<div class="col-lg-3 f4">
						<a href="http://handyman.com/home/how-it-works" class="feature-link text-center">
							HOW IT WORKS
							<span class="meta-desc">Free Match-up for your project!   <i class="fa fa-angle-right"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		
<script src="<?php echo BASE_URL; ?>js/home.js"></script>
<?php include ('footer.php')?>
