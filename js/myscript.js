	function btn_clicked(clicked_id){
		if (clicked_id=='filter-btn1') {
			document.getElementById('all').style.display = "block";
			document.getElementById('ui/ux').style.display = "none";
			document.getElementById('andriod').style.display = "none";
			document.getElementById('ios').style.display = "none";
			document.getElementById('wireframes').style.display = "none";
		}
		else if (clicked_id=='filter-btn2') {
			document.getElementById('all').style.display = "none";
			document.getElementById('ui/ux').style.display = "block";
			document.getElementById('andriod').style.display = "none";
			document.getElementById('ios').style.display = "none";
			document.getElementById('wireframes').style.display = "none";
		}
		else if (clicked_id=='filter-btn3') {
			document.getElementById('all').style.display = "none";
			document.getElementById('ui/ux').style.display = "none";
			document.getElementById('andriod').style.display = "none";
			document.getElementById('ios').style.display = "none";
			document.getElementById('wireframes').style.display = "block";
		}
		else if (clicked_id=='filter-btn4') {
			document.getElementById('all').style.display = "none";
			document.getElementById('ui/ux').style.display = "none";
			document.getElementById('andriod').style.display = "none";
			document.getElementById('ios').style.display = "block";
			document.getElementById('wireframes').style.display = "none";
		}
		else if (clicked_id=='filter-btn5'){
			document.getElementById('all').style.display = "none";
			document.getElementById('ui/ux').style.display = "none";
			document.getElementById('andriod').style.display = "block";
			document.getElementById('ios').style.display = "none";
			document.getElementById('wireframes').style.display = "none";
		}
	}
	
	
		// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("go_top_Btn").style.display = "block";
    } else {
        document.getElementById("go_top_Btn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(document).ready(function(){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll > 3050) {
		  $("#go_top_Btn > img").css("background" , "url(img/bkPor.svg) no-repeat");
		}
  
		else{
			$("#go_top_Btn > img").css("background" , "url(img/SCROLL-UP-WHITE.svg) no-repeat");  	
		}
	})
  })
