<?php  
    include('header.php');
?>
	<body>
		<?php include('navigation.php');?>
		
		
		<div class="pages-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Contact Us - <span>Learn more about Joining our Partner Network</span></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4">
								<iframe frameborder="0" style="width: 350px;background: whitesmoke;height: 500px;padding: 15px 0 0 15px;border-radius: 5px;margin-top: 30px;" scrolling="no" src="http://domaindirectory.com/servicepage/contactus2_form.php?domain=<?php echo $info['domain']?>" id="l_contactus"></iframe>
								<br>
								<br>
							</div>
							<div class="col-lg-8">
								<br>
								<br>
								<p class="p-desc stripe-text right text-left">
									<span><?php echo ucfirst($info['domain'])?></span>
									is a venture of eCorp.com Inc.
									<br>
									<br>
									Join our exclusive community of like minded people on <?php echo ucfirst($info['domain'])?><br><br>

									<span>eCorp</span> is the worlds largest virtual domain development incubator on the planet. Founded in 1996, we create, acquire, match, manage and liquidate premium domain assets and platforms. We build and manage world class web-based, domain centric operating businesses for clients and internal ventures. Learn more about our ventures, staffing opportunites and partnership models.
								</p>
								<p>
									<a class="btn btn-primary" target="_blank" href="http://globalventures.com"> Learn about this site </a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include ('footer.php')?>