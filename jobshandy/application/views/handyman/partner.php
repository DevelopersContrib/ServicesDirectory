<?php  
    include('header.php');
?>
	<body>
		<?php include('navigation.php');?>
		<style type="text/css">
		.partner-container{
			background: url(http://luxurymiles.com/img/bg-socialholdings.jpg) repeat scroll;
		}
		.sub-container{
			background: rgba(0,0,0,0.8);
			padding: 50px 15px;
			color: #fff;
		}
		.img-partner-logo{
			display: inline-block;
			width: 280px;
		}
		.blckbckgrnd{
			background: rgba(0,0,0,0.5);
			box-shadow: 0 0 3px #fff;
			margin-bottom: 5px;
			padding: 15px 0;
		}
		.link-p-n{
			color: #FFFFFF;
		    display: inline-block;
		    font-size: 30px;
		    line-height: normal;
		}
		.link-p-n:hover{
			color: #999;
		}
		.link-p-n,.link-p-n:hover,.link-p-n:focus{
			outline: none;
			text-decoration: none;
		}
		.pn-logo{
			margin-bottom: 10px;
			display: block;
		}
		.marg{
			margin-bottom: 10px;
		}
	</style> <!-- Do Not Include this -->
		<div class="partner-container">
			<div class="sub-container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<a href="">
								<? if($info['logo']!=''){?>
									 <img alt="<?php echo $info['domain']?>" src="<?echo $info['logo']?>" class="img-responsive img-partner-logo">
									 
								<?}else{?>
									<?php echo ucfirst($info['domain'])?>
								<?}?>
							</a>
							<h3>Learn more about Joining our Partner Network</h3>
							<!--<a href="" class="btn btn-primary btn-lg">Join Our Partner Network</a>-->
						</div>
					</div>
				</div>
				<br>
				<div class="container partner-network">
					<div class="row marg">
						<div class="col-lg-4">
							<iframe frameborder="0" style="width:350px;height:470px;border: none;background: whitesmoke;border-radius: 5px;" scrolling="no" src="http://domaindirectory.com/servicepage/partners_form.php?domain=<?php echo $info['domain']?>" id="l_partner"></iframe>
						</div>
						<div class="col-lg-8">
							<div class="row blckbckgrnd">
								<div class="col-lg-3">
									<a href="" class="pn-logo"><img alt="Contrib.com" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/logo-contrib-green13.png" class="img-responsive"></a>
								</div>
								<div class="col-lg-9">
									<a href="" class="link-p-n">Contrib.com</a>
									<p>
										Our network of Contributors power our domains. Browse through our Marketplace of People, Partnerships,Proposals and Brands and find your next great opportunity. Join Free Today.
									</p>
								</div>
							</div>
							<div class="row blckbckgrnd">
								<div class="col-lg-3">
									<a href="" class="pn-logo"><img alt="Globalventures.com" src="http://d2qcctj8epnr7y.cloudfront.net/images/lucille/logo-gv-re283x35.png" class="img-responsive"></a>
								</div>
								<div class="col-lg-9">
									<a href="" class="link-p-n">Globalventures.com</a>
									<p>
										Global Ventures owns a premium network of 20,000 websites and powerful tools to help you build successful companies quickly. Some of the things we offer you include a great domain name with targeted traffic, unique business model, equity ownership, and flexible, performance based compensation. You just need to bring your knowledge, passion and work smart.
									</p>
									<p>
										With over 17 years of internet experience, we built a network of over 20,000 websites and created dozens of successful businesses. We would love to work on the next cutting-edge projects with great companies and talented people.
									</p>
								</div>
							</div>
							<div class="row blckbckgrnd">
								<div class="col-lg-3">
									<a href="" class="pn-logo"><img alt="iFund.com" src="http://www.contrib.com/uploads/logo/ifund.png" class="img-responsive"></a>
								</div>
								<div class="col-lg-9">
									<a href="" class="link-p-n">iFund.com</a>
									<p>
										 iFund is a software as a service crowdfunding platform. iFund is not a registered broker-dealer and does not offer investment advice or advise on the raising of capital through securities offerings. iFund does not recommend or otherwise suggest that any investor make an investment in a particular company, or that any company offer securities to a particular investor. iFund takes no part in the negotiation or execution of transactions for the purchase or sale of securities, and at no time has possession of funds or securities. No securities transactions are executed or negotiated on or through the iFund platform. iFund receives no compensation in connection with the purchase or sale of securities.

									</p>
								</div>
							</div>
							<div class="row blckbckgrnd">
								<div class="col-lg-3">
									<a href="" class="pn-logo"><img alt="Contrib.com" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/logo-ichallenge1.png" class="img-responsive"></a>
								</div>
								<div class="col-lg-9">
									<a href="" class="link-p-n">iChallenge.com</a>
									<p>
										The best internet challenges. Solve and win online prizes.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

<?php include ('footer.php')?>