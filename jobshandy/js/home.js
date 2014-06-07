$(document).ready(function(){

	$('#estimate').click(function(){
	
	
		$('#estimate_display').css('display','block');
		$('#expert_display').css('display','none');
		$('#esticlass').addClass('active');
		$('#askclass').removeClass('active');
	
	});
	
	$('#expert').click(function(){
	
		$('#estimate_display').css('display','none');
		$('#expert_display').css('display','block');
		$('#askclass').addClass('active');
		$('#esticlass').removeClass('active');
	
	
	});

	$('#estiredirect').click(function(){
	
	
		var proj_types = $('#proj_types').val();
		var zipcodes2 = $('#zipcodes2').val();
		var base_url = $('#base_url').val();
		
		
		window.location.href = base_url+'postproject/find/'+zipcodes2+'/'+proj_types;
		
		
	
	});
	
	$('#askredirect').click(function(){
	
		
		var proj_cat = $('#proj_cat').val();
		
		window.location.href = 'http://handyman.com/questions/category/cat/'+proj_cat;
		
	
	
	})

});