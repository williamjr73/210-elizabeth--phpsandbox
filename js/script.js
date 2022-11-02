$(document).on('ready', function(){
	/*=========================================================================
	Count down timer
	=========================================================================*/
	var countDownDate = new Date("Sep 1, 2020 08:37:25").getTime();
	// Update the count down every 1 second
	var x = setInterval(function() {
	    // Get todays date and time
	    var now = new Date().getTime();
	    
	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;
	    
	    // Time calculations for days, hours, minutes and seconds
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    var textday = "";
	    
	    var toStringDays = days.toString();
	    if (toStringDays.length > 1){
	    	textday = "Days";
	    }else{
	    	textday = "Day";
	    }
	    document.getElementById("daypost").innerHTML = "<h1><span>"+days+"</span></h1><p> "+textday+" left </p>"
	    document.getElementById("timepost").innerHTML = "<div class=\"box\"><h4>"+hours+"</h4><p>Hour</p></div> <div class=\"box\"><h4>"+minutes+"</h4><p>Minutes</p></div> <div class=\"box boxsecond\"><h4>"+seconds+"</h4><p>Seconds</p></div>"
	    // If the count down is over, write some text 
	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("timer").innerHTML = "EXPIRED";
	    }
	}, 1000);

	/*=========================================================================
	Onloading page with spinner
	=========================================================================*/
	$(window).on('load', function (e) {
    	$(".openingloader").addClass('openingloaderhide');
	})

	/*=========================================================================
	Event Click Button Contact
	=========================================================================*/
	$('#contactnow').on('click', function(){
		$('.block1').addClass('hidesmooth');
		$('.block2').addClass('blocktransform');
		$('.block3').addClass('opensmooth');
		return false;
	});

	/*=========================================================================
	Event Click Button Go Back
	=========================================================================*/
	$('#goback').on('click', function(){
		$('.block1').removeClass('hidesmooth');
		$('.block2').removeClass('blocktransform');
		$('.block3').removeClass('opensmooth');
		return false;
	})
})