$(document).ready(function(){

		$("#zipcode").keypress(function (e) {
			 
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				
				$("#errmsg").html("Digits Only").show().fadeOut("slow");
					   return false;
			}
		});
		
		$("#homeown_number").keypress(function (e) {
			 
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				
				$("#errmsg2").html("Digits Only").show().fadeOut("slow");
					   return false;
			}
		});
		
		
		
		
		
		
		$('#post_project').click(function(){
		
			var projecttype = $('#projecttype').val();
			var proj_desc = $('#proj_desc').val();
			var idealstartdate = $('#idealstartdate').val();
			var projectstats = $('#projectstats').val();
			var timeframe = $('#timeframe').val();
			var owned = $('input[name="optionsRadios"]:checked').val();
			var address = $('#address').val();
			var state = $('#state').val();
			var city = $('#city').val();
			var zipcode = $('#zipcode').val();
			var budget = $('#budget').val();
			var homeown_fname = $('#homeown_fname').val();
			var homeown_lname = $('#homeown_lname').val();
			var homeown_number = $('#homeown_number').val();
			var homeown_uname = $('#homeown_uname').val();
			var homeown_email = $('#homeown_email').val();
			var base_url = $('#base_url').val();
			var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var specialcharsfilter = /[^a-zA-Z 0-9]+/g;
			if(jQuery('input[type="checkbox"][name="termscon"]').is(':checked')){
				var checks = 1;
			}
			
			
			if(projecttype == "" || projecttype == "Select Type"){
				$("#errors2").html('<div class="alert alert-danger">Project type is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#projecttype").focus();
			}else if(proj_desc == ""){
				$("#errors2").html('<div class="alert alert-danger">Project description is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#proj_desc").focus();
			}else if(idealstartdate == "" || idealstartdate == "Select"){
				$("#errors2").html('<div class="alert alert-danger">Ideal start date is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#idealstartdate").focus();
			}else if(projectstats == "" || projectstats == "Select"){
				$("#errors2").html('<div class="alert alert-danger">Project Status is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#projectstats").focus();
			}else if(timeframe == "" || timeframe == "Select"){
				$("#errors2").html('<div class="alert alert-danger">Completion time frame is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#timeframe").focus();
			}else if(address == ""){
				$("#errors2").html('<div class="alert alert-danger">Address is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#address").focus();
			}else if(state == "" || state == "Please Select"){
				$("#errors2").html('<div class="alert alert-danger">Please select a state <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#state").focus();
			}else if(city == ""){
				$("#errors2").html('<div class="alert alert-danger">City is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#city").focus();
			}else if(zipcode == ""){
				$("#errors2").html('<div class="alert alert-danger">Zipcode is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#zipcode").focus();
			}else if(budget == "" || budget == "Select"){
				$("#errors2").html('<div class="alert alert-danger">Budget is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#budget").focus();
			}else if(homeown_fname == ""){
				$("#errors2").html('<div class="alert alert-danger">First name is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_fname").focus();
			}else if(homeown_lname == ""){
				$("#errors2").html('<div class="alert alert-danger">Last name is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_lname").focus();
			}else if(homeown_number == ""){
				$("#errors2").html('<div class="alert alert-danger">Last name is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_number").focus();
			}else if(homeown_uname == ""){
				$("#errors2").html('<div class="alert alert-danger">Username is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_uname").focus();
			}else if(homeown_email == ""){
				$("#errors2").html('<div class="alert alert-danger">Email is required <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_email").focus();
			}else if(checks != 1){
				$("#errors2").html('<div class="alert alert-danger">Please agree to our terms and condition<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}else if(!emailfilter.test(homeown_email)){
				$("#errors2").html('<div class="alert alert-danger">Invalid email address <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_email").focus();
			}else if(homeown_number.length != 10){
				$("#errors2").html('<div class="alert alert-danger">Phone number should have 10 digits. <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_number").focus();
			}else if(homeown_uname.length < 5 || homeown_uname > 10){
				$("#errors2").html('<div class="alert alert-danger">Public name must be 5 to 10 characters. <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_uname").focus();
			}else if(specialcharsfilter.test(homeown_uname)){
				$("#errors2").html('<div class="alert alert-danger">Cannot input special characters <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				$("#homeown_uname").focus();
			}else{
				$.post(base_url+'postproject/addproject',
						{
							projecttype:projecttype,
							proj_desc:proj_desc,
							idealstartdate:idealstartdate,
							projectstats:projectstats,
							timeframe:timeframe,
							owned:owned,
							address:address,
							state:state,
							city:city,
							zipcode:zipcode,
							budget:budget,
							homeown_fname:homeown_fname,
							homeown_lname:homeown_lname,
							homeown_number:homeown_number,
							homeown_uname:homeown_uname,
							homeown_email:homeown_email
						},function(response){
							var obj = JSON.parse(response);
							if( obj.success == 'success'){
								
								//alert("save");
								$("#errors2").html('<div class="alert alert-success">Registration Successful<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
								
								window.location.href = 'http://handyman.com/api/autologin/code/'+obj.emailencode;
								

								
							}else{
								$("#errors2").html('<div class="alert alert-danger">'+obj.exist+'<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
							
							}
						
						})
			}
			
			
			
		
		
		});
		
});