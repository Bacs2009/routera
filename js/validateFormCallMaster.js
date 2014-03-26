$(document).ready(function(){
	$('#submit').click(function(){
		var name = $('#name').val();
		var msg = $('#msg').val();
		var captcha = $('#captcha').val();
		
		/* if( name.length == 0){
			$('#name').addClass('error');
		}
		else{
			$('#name').removeClass('error');
		}

		if( msg.length == 0){
			$('#msg').addClass('error');
		}
		else{
			$('#msg').removeClass('error');
		}

		if( captcha.length == 0){
			$('#captcha').addClass('error');
		}
		else{
			$('#captcha').removeClass('error');
		} */
		
		if(/* name.length != 0 && msg.length != 0 &&  */captcha.length != 0){
			return true;
		}
		return false;
	});
});