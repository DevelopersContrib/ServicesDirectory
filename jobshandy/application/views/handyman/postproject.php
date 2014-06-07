<?php  
    include('header.php');
?>
	<body>
		<?php include('navigation.php');?>
		
		<div class="pages-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Post a Project</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="page-content p-c-2">
			<div class="container">
			<div id="errors2"></div>
				<div class="row">
					<div class="col-lg-8">
						<h3>Select Project Type</h3>
						<div class="row brdr-btm-5px">
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Select Project Type <span class="text-danger">*</span></label>
									<select name="projecttype" id="projecttype" class="form-control">
										
										<?php if($projecttype_id != '0'):?>
											<?php 				
												foreach($projecttypes as $array)
												{
													foreach($array as $key => $info)
													{
													if($projecttype_id == $info['ProjectTypeId']){
													echo '<option value="'.$info['ProjectTypeId'].'" name='.$info['Name'].'>'.$info['Name'].'</option>';
													}
													}
												}	
											?>
											
											
										<?php endif;?>
										
										
										<option>Select Type</option>
										<?php 				
												foreach($projecttypes as $array)
												{
													foreach($array as $key => $info)
													{
													echo '<option value="'.$info['ProjectTypeId'].'" name='.$info['Name'].'>'.$info['Name'].'</option>';
													}
												}	
											?>
									</select>
								</div>
							</div>
							<br>
						</div>
						<h3>Describe What Needs To Be Done.</h3>
						<div class="row brdr-btm-5px">
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Project Description <span class="text-danger">*</span></label>
									<textarea class="form-control" id="proj_desc" rows="5"></textarea>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Ideal Start Date <span class="text-danger">*</span></label>
									<select class="form-control" id="idealstartdate">
										<option>Select</option>
										<option value="Now">Now</option>
										<option value="1-Week">1-Week</option>
										<option value="2-Weeks">2-Weeks</option>
										<option value="3-Weeks">3-Weeks</option>
										<option value="1-2 Months">1-2 Months</option>
										<option value="3-6 Months">3-6 Months</option>
									</select>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Project Status <span class="text-danger">*</span></label>
									<select class="form-control" id="projectstats">
										<option>Select</option>
										<option value="Ready to Hire">Ready to Hire</option>
										<option value="Planning and Budgeting">Planning and Budgeting</option>
									</select>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Completion Time Frame <span class="text-danger">*</span></label>
									<select class="form-control" id="timeframe">
										<option>Select</option>
										<option value="Timing is Flexible">Timing is Flexible</option>
										<option value="Less than 2 months">Less than 2 months</option>
										<option value="More than 2 months">More than 2 months</option>
									</select>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Do You Own the Property <span class="text-danger">*</span></label> <br>
									<div class="radio-inline">
										<label class="pull-right">
											<input name="optionsRadios" id="optionsRadios1" value="1" type="radio" checked>
											Yes
										</label>
									</div>
									<div class="radio-inline">
										<label class="pull-right">
											<input name="optionsRadios" id="optionsRadios2" value="0" type="radio">
											No
										</label>
									</div>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Address <span class="text-danger">*</span></label>
									<textarea class="form-control" rows="5" id="address"></textarea>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>State <span class="text-danger">*</span></label>
									<select class="form-control" id="state">
										<option>Please select</option>
										<option name="Alabama" value="2">Alabama</option>
										<option name="Alaska" value="1">Alaska</option>
										<option name="Arizinto states" value="4">Arizinto states</option>
										<option name="Arkansas" value="3">Arkansas</option>
										<option name="California" value="5">California</option>
										<option name="Colinto statesdo" value="6">Colinto statesdo</option>
										<option name="Connecticut" value="7">Connecticut</option>
										<option name="Delaware" value="9">Delaware</option>
										<option name="Florida" value="10">Florida</option>
										<option name="Georgia" value="11">Georgia</option>
										<option name="Hawaii" value="12">Hawaii</option>
										<option name="Idaho" value="14">Idaho</option>
										<option name="Iinto states" value="13">Iinto states</option>
										<option name="Illininto states" value="15">Illininto states</option>
										<option name="Indiana" value="52">Indiana</option>
										<option name="Ininto statesna" value="16">Ininto statesna</option>
										<option name="into statesgo" value="38">into statesgo</option>
										<option name="into statestrict of Columinto states" value="8">into statestrict of Columinto states</option>
										<option name="Kansas" value="17">Kansas</option>
										<option name="Kentucky" value="18">Kentucky</option>
										<option name="Louisiana" value="19">Louisiana</option>
										<option name="Maine" value="22">Maine</option>
										<option name="Maryland" value="21">Maryland</option>
										<option name="Massachusetts" value="20">Massachusetts</option>
										<option name="Michiga" value="23">Michiga</option>
										<option name="Minnesinto states" value="24">Minnesinto states</option>
										<option name="Minnesota" value="53">Minnesota</option>
										<option name="Minto statesana" value="27">Minto statesana</option>
										<option name="Mississippi" value="26">Mississippi</option>
										<option name="Missouri" value="25">Missouri</option>
										<option name="Neinto statesska" value="30">Neinto statesska</option>
										<option name="Nevada" value="34">Nevada</option>
										<option name="New Hampshire" value="31">New Hampshire</option>
										<option name="New Jersey" value="32">New Jersey</option>
										<option name="New Mexico" value="33">New Mexico</option>
										<option name="New York" value="35">New York</option>
										<option name="Ninto statesh Carolina" value="28">Ninto statesh Carolina</option>
										<option name="Ninto statesh Dakinto states" value="29">Ninto statesh Dakinto states</option>
										<option name="Ohio" value="36">Ohio</option>
										<option name="Oklahinto states" value="37">Oklahinto states</option>
										<option name="Pennsylvania" value="39">Pennsylvania</option>
										<option name="Rhinto states Island" value="40">Rhinto states Island</option>
										<option name="Sinto statesh Carolina" value="41">Sinto statesh Carolina</option>
										<option name="Sinto statesh Dakinto states" value="42">Sinto statesh Dakinto states</option>
										<option name="Tennessee" value="43">Tennessee</option>
										<option name="Texas" value="44">Texas</option>
										<option name="Utah" value="45">Utah</option>
										<option name="Verminto states" value="47">Verminto states</option>
										<option name="Virginia" value="46">Virginia</option>
										<option name="Washingto" value="48">Washingto</option>
										<option name="West Virginia" value="50">West Virginia</option>
										<option name="Wiscinto statesi" value="49">Wiscinto statesi</option>
										<option name="Wyoming" value="51">Wyoming</option>
									</select>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>City <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="city" >
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Zipcode <span class="text-danger">*</span></label>
									<?php if($zip != '0'):?>
										<input class="form-control" type="text" id="zipcode" value="<?php echo $zip?>">
									
									<?php else: ?>
									<input class="form-control" type="text" id="zipcode">
									<?php endif;?>
									<span id="errmsg" style="color:red"></span>
								</div>
								
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Project Budget <span class="text-danger">*</span></label>
									<select class="form-control" id="budget">
										<option>Select</option>
										<option value="up to $500">up to $500</option>
										<option value="$500 to $1000">$500 to $1000</option>
										<option value="$1000 to $2500">$1000 to $2500</option>
										<option value="$2500 to $5000">$2500 to $5000</option>
										<option value="$5000 to $10000">$5000 to $10000</option>
										<option value="$10000 to $25000">$10000 to $25000</option>
										<option value="$25000 to $50000">$25000 to $50000</option>
										<option value="$50000 to $100000">$50000 to $100000</option>
										<option value="$100000 to $200000">$100000 to $200000</option>
										<option value="$200000 +">$200000 +</option>
									</select>
								</div>
							</div>
						</div>
						<span class="header-span">Register with HandyMan</span>
						<!-- <a href="javascript:;" class="pull-right linkform">
							<span>Already Have An Account?</span>
						</a> -->
						<div class="row brdr-btm-5px">
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>First Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="homeown_fname" id="homeown_fname" value="">
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Last Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="homeown_lname" id="homeown_lname" value="">
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Phone Number (10 digit number with area code) <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="homeown_number" id="homeown_number" value="">
									<span id="errmsg2" style="color:red"></span>
								</div>
								
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Public Username <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="homeown_uname" id="homeown_uname" value="">
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<label>Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="homeown_email" id="homeown_email" value="">
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 text-right proj-wrap">
								<div class="form-group">
									<div class="checkbox text-left">
										<label>
											<input type="checkbox" name="termscon">
											I Accept And Agree To The <a href="<?php echo BASE_URL ?>home/terms">Terms & Condition</a>
										</label>
									</div>
								</div>
							</div>
							<div class="col-lg-11 col-lg-offset-1 ">
								<div class="form-group">
									<a href="javascript:;" id="post_project" class="btn btn-primary btn-lg">Post a Project</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="alert alert-info">
							<strong>Dear Clients,</strong> <br>
							<p>
								First you will need to fill out this form, describing what needs to be done. Once your Project is approved and posted on the site, relevant Business people will be alerted. You'll receive email alerts when your Project starts getting interest and you'll then compare Contractor by reviewing profiles, work history, qualifications and customer reviews.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<script src="<?php echo BASE_URL; ?>js/postproject.js"></script>
<?php include ('footer.php')?>