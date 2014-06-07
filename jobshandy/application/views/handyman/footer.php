		<footer class="footer">
			<ul class="list-inline text-center ul-footer">
				<li><a href="index.html">Home</a></li>
				<li><a href="<?php echo BASE_URL ?>contact">Contact us</a></li>
				<li><a href="<?php echo BASE_URL ?>partner">Partner with us</a></li>
				<li><a href="javascript:;" data-toggle="modal" data-target="#myModal">Apply now</a></li>
				<li><a href="<?php echo BASE_URL ?>home/terms">Terms</a></li>
				<!--<li><a href="<?//php echo BASE_URL ?>home/about">About Us</a></li>-->
				<!--<li><a href="">Inquire about this domain</a></li>-->
				<li><a href="<?php echo BASE_URL ?>referral">Referral</a></li>
			</ul>
			<div class="sub-footer text-center">
				&copy; <span class="domain-footer">bannerbroker.com</span> 2013 - 2014 | All Right Reserved
			</div>
		</footer>
	</body>
</html>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Partner with us</h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:350px;height:470px;border: none;background: whitesmoke;border-radius: 5px; margin-left:99px" scrolling="no" src="http://domaindirectory.com/servicepage/partners_form.php?domain=<?php echo $info['domain']?>" id="l_partner"></iframe>
      </div>
     
    </div>
  </div>
</div>