<html>
<head>
	<title>Page3</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="thumbnail-slider.js" type="text/javascript"></script>
	<script type="text/javascript">
		var slideIndex = 1;
		showSlides(slideIndex);

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}
		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("thumb");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
	</script>
</head>
<body>
<div class="header">
	<div id="left_header">
		<a href="#">
			<img src="back.png" width="5%">
		</a>
		<a href="#">
			<img src="comments.png" width="9%">
		</a>
		<a href="#">
			<img src="bookmark.png" width="9%">
		</a>
		<a href="#">
			<img src="share.png" width="9%">
		</a>
	</div>
	<div id="mid_header">
		<img src="n.png" width="9%">
	</div>
	<div id="right_header">
		<a href="#">
			<img src="text.png" width="11%">
		</a>
		<a href="#">
			<img src="search.png" width="9%">
		</a>
		<a href="#">
			<img src="avatar.png" width="10%" >
		</a>
	</div>
</div>
<div class="header_mobile">
	<div id="header">
		<a href="#">
			<img src="back.png" width="3%">
		</a>
		<a href="#">
			<img src="comments.png" width="5%">
		</a>
		<a href="#">
			<img src="text.png" width="7%">
		</a>
		<a href="#">
			<img src="bookmark.png" width="5%">
		</a>
		<a href="#">
			<img src="share.png" width="5%">
		</a>
	</div>
</div>
<div style="clear: both;"></div>
<div class="content">
	<div class="slider">
		<div id="slider_image">
			<div id="top_slider"></div>
			<div id="slider_content">
				Arctic sea ice extent hits records low for winter maximum
			</div>
		</div>
	</div>
	<div id="icons">
		<div id="icon_left">
			<img src="source.png" width="10px"><sup>CNN</sup>&emsp;&emsp;
			<img src="time.png" width="11px"><sup id="old">1h-ago</sup><sup id="new">Apr 3,2015</sup>
		</div>
		<div id="icon_right">
			ENVIRONMENT
		</div>
	</div>
	<div id="article1">
		According to the National Oceanic and Atmospheric Administration, Ted Scambos, NSIDC lead scientist, puts the potentially record low maximum sea ice extent this year down to low ice extent in the pacific and a late drop in ice extent in the Barents Sea. 
	</div>
	<div class="images">
		<div id="image1_div">
			<img src="image2.png">
		</div>
		<div id="text">
			"Over the span of the satellite record. Arctic sea ice has been declining significantly, while sea ice in the Antarctic has increased very slightly"
			<br/><br/>
			-NOAA
		</div>
		<div id="image_div">
			<img src="image1.png">
		</div>
	</div>
	<div class="images2">
		<div id="image_top2">
			<img src="image2.png" width="65%">
		</div>
		<div id="image_div2">
			<img src="image1.png" height="60%">
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="article2">
		<div id="heading">
				So what does this new record for the lowest level of winter ice actually mean?
			</div>
			<div id="article2_content">
				The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into the bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there's huge variety of the state of the ice.
			</div>
		</div>
		<div id="video">
			<img src="video.png" width="100%">
		</div>
		<div id="article3">
			<p>For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.</p>

			<o>So at some point this century the summers are on course to be clear of ice, opening up new shipping lanes, making it easier to access the region's oil and gas and also altering the path of the jet stream that drives our weather. So the matter of when all this might happen is the subject of intense research.  
		</div>
		<div class="horizontal">	
			<div id="thumbnail-slider">
		        <div class="inner">
		            <ul>
		                <li>
		                    <a class="thumb" href="image4.png"></a>
		                </li>
		                <li>
		                    <a class="thumb" href="image3.png"></a>
		                </li>
		                <li>
		                    <a class="thumb" href="image5.png"></a>
		                </li>
		            </ul>
		        </div>
        	</div>
		</div>
		<div id="heading2">
			Melting Ice in Arctic Ocean
		</div>
		<div id="heading3">
			James Flinton
		</div>
		<div id="pagination">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
          	<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>
	<div style="clear: both;"></div>

	<div class="footer">
		<sup>NEXT STORY</sup>&emsp;
		<a href="#">
			<img src="next.png" width="2%">
		</a>
	</div>
</body>
</html>