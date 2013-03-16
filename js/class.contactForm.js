//alert("contactForm connected");

//Adapted From: http://samcroft.co.uk/2012/posting-data-from-a-phonegap-app-to-a-server-using-jquery/
//reused and readapted from Dr Andrew Bingham example code
$(document).ready(function() {

$('form').submit(function(){
	
	//Collect all POST data coming from the form
	var postData = $(this).serialize();
	
	
	
		$.ajax({
			type: 'POST',
			data: postData,
			
			//url: 'http://www.scm.tees.ac.uk/Gallery/mailer/class.mailReceipt.php',
			//url: 'https://scm-intranet.tees.ac.uk/users/u0018370/mailer/class.mailReceipt.php',
			url: 'http://euricopenelas.com/apps/class.mailReceipt.php',
			success: function(data){
				console.log(data);
				alert('Your message was successfully sent');
			},
			error: function(){
				console.log(data);
				alert('There was an error adding your message, Please try again!');
			}
		});
		
		return false;
	});
});