<html>
<head>
	<?php include_once("head.php"); ?>
	<title>Suite Space</title>

</head>

<body class="sheer home">
	<div id="wrapper">
		<?php include_once("header.php"); ?>

	<!-- Banner Start -->
  <section id="banner">
  	<div class="banner-slider">
  		<div id="banner-slider" class="banner-slider carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="Component Banner [@ BannerType @] Banner4" style="background-image:url('assets/img/banner-image-1.jpg');">
					<div class="ComponentLayout layoutRow ">
						<div class="carousel-caption">
							<div class="container">
								<div class="hotel-detail">
									<h2>Waterfront Residence </h2>
									<p>Miami Beach, FL 33109</p>
									<div class="hotel-area clearfix">
										<a href="[@ urlname @]" class="btn btn-primary">$7,995,000</a>
										<ul class="clearfix">
											<li><span class="badge">5</span>Bedrooms</li>
											<li><span class="badge">4.5</span>Bathrooms</li>
											<li><span class="badge">6.124</span>SQ FT</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="Component Banner [@ BannerType @] Banner3" style="background-image:url('assets/img/banner-image-5.jpg');">
					<div class="ComponentLayout layoutRow ">
						<div class="carousel-caption">
							<div class="container">
								<div class="agent-detail text-center">
									<div class="agent-photo">
										<span>
											<img class="agentProfile" src="assets/img/agent-image-1.png" alt="">
										</span>
									</div>
									<h3>Martin	Maldonado</h3>
									<span class="designation">Visual Realty</span>
									<p>14510 sw 88th St.<br>Stuite 34 Miami FL 33146</p>
									<hr>
									<a href="[@ urlname @]" class="btn btn-primary btn-block">Contact Agent</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="Component Banner [@ BannerType @] Banner2" style="background-image:url('assets/img/banner-image-5.jpg');">
					<div class="ComponentLayout layoutRow ">
						<div class="carousel-caption">
							<div class="container">
								<div class="property-detail">
									<h3>12965 Mizner Way</h3>
									<p>Wellington, FL 33414</p>
									<ul>
										<li>4 Bedrooms</li>
										<li>3.5 Bathrooms</li>
										<li>4,214 SQ FT.</li>
									</ul>
									<hr>
									<div class="property-price">$2,995,00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="Component Banner [@ BannerType @] Banner1" style="background-image:url('assets/img/banner-image-5.jpg');">
					<div class="ComponentLayout layoutRow ">
						<div class="carousel-caption">
							<div class="banner-overlay">
								<div class="container">
									<div class="banner-text">
										<h1>The experience needed to sell your home fast</h1>
										<p>Martin  is a top realtor/investor with over 15 years of experience. Martin is a Miami native and SELLING HOMES FAST is his specialty.</p>
										<a href="[@ urlname @]" class="btn btn-primary">Learn more</a>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#banner-slider" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#banner-slider" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
		</a>
	</div>
  		
  	</div>
  </section>

	<!-- Content Start -->
  <section id="content" class="home">
  	<div class="container">
  		<div class="panel-block search-bar">
  			<div class="search-fields">
  				<ul class="select-group clearfix">
  					<li>
  						<select class="form-control js-selectbox" title="City">
  							<option>Asheville</option>
						    <option>Miami</option>
						    <option>New York</option>
  						</select>
  					</li>
  					<li>
  						<select class="form-control js-selectbox" title="Zip code">
  							<option>28803</option>
						    <option>07740</option>
						    <option>21221</option>
  						</select>
  					</li>
  					<li>
  						<select class="form-control js-selectbox" title="Type">
  							<option>Single Family</option>
                <option>Multi-Family</option>
                <option>Commercial</option>
                <option>Land</option>
                <option>Rentals</option>
  						</select>
  					</li>
  					<li>
  						<select class="form-control js-selectbox" title="Max Price">
  							<option>0 - 50,000</option>
    						<option>50,000 - 100,000</option>
    						<option>100,000 - 200,000</option>
                <option>200,000 - 300,000</option>
                <option>300,000 +</option>
  						</select>
  					</li>
  				</ul>
  				<a href="search.php"><button type="button" class="btn btn-primary search-btn">Search</button></a>
  			</div>
  			<a href="#" class="advance-search">Advanced Search</a>
  		</div>
  		<div class="row main-row-col">
  			<div class="col-sm-8">
  				<div class="toolbar clearfix">
  					<h4>Featured</h4>
  				</div>
  				<div class="row">
  					<div class="col-sm-6">
  						<div class="thumbnail teaser-block">
  							<div class="thumb">
  								<img src="assets/img/image-1.jpg" alt="">
  							</div>
  							<div class="caption panel-block">
  								<h3>Aqualane Shores</h3>
  								<p>640 17th Ave S Aqualane Shores, ...</p>
  								<span class="price">$2,995,000</span>
  								<ul class="clearfix">
  									<li>4 Beds</li>
  									<li>3 Baths</li>
  									<li>4,214 SQ FT.</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  					<div class="col-sm-6">
  						<div class="thumbnail teaser-block">
  							<div class="thumb">
  								<img src="assets/img/image-2.jpg" alt="">
  							</div>
  							<div class="caption panel-block">
  								<h3>Bay Isles</h3>
  								<p>Longboat Key, Florida 34228 United States</p>
  								<span class="price">$2,995,000</span>
  								<ul class="clearfix">
  									<li>4 Beds</li>
  									<li>5 Baths</li>
  									<li>4,214 SQ FT.</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  					<div class="col-sm-6">
  						<div class="thumbnail teaser-block">
  							<div class="thumb">
  								<img src="assets/img/image-1.jpg" alt="">
  							</div>
  							<div class="caption panel-block">
  								<h3>Aqualane Shores</h3>
  								<p>640 17th Ave S Aqualane Shores, ...</p>
  								<span class="price">$2,995,000</span>
  								<ul class="clearfix">
  									<li>4 Beds</li>
  									<li>3 Baths</li>
  									<li>4,214 SQ FT.</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  					<div class="col-sm-6">
  						<div class="thumbnail teaser-block">
  							<div class="thumb">
  								<img src="assets/img/image-2.jpg" alt="">
  							</div>
  							<div class="caption panel-block">
  								<h3>Bay Isles</h3>
  								<p>Longboat Key, Florida 34228 United States</p>
  								<span class="price">$2,995,000</span>
  								<ul class="clearfix">
  									<li>4 Beds</li>
  									<li>5 Baths</li>
  									<li>4,214 SQ FT.</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="col-sm-4">
  				<aside>
  					<div class="panel-block">
    					<div class="agent-detail text-center">
						<div class="agent-photo">
							<span>
								<img class="agentProfile" src="assets/img/agent-image-2.png" alt="">
							</span>
						</div>
						<h4>Anthony Denito</h4>
						<span class="designation">Re/Max Advanced Realty II</span>
						<p class="agent-contact">(305) 283-3234<br> <a href="#">A.Denito@remax.com</a></p>
						<p>11010 sw 88th St. Ste<br>200 Miami FL 33176</p>
						<hr>
					</div>
					<div class="agent-form">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
							<div class="form-group">
								<textarea rows="4" class="form-control" placeholder="Message" title="Message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-block" value="Send to Agent">
							</div>
						</form>
					</div>
				</div>
  				</aside>
  			</div>
  		</div>
  	</div>
  	<div class="blog-section">
  		<div class="container">
    		<div class="blog-title"><span>Blog</span></div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="blog-teaser media">
    					<div class="media-left media-middle">
    						<div class="thumb">
    							<img src="assets/img/image-3.jpg" alt="">
    						</div>
    					</div>
    					<div class="media-body media-middle">
    						<div class="blog-text">
    							<h4>Lorem ipsum dolor sit amet</h4>
    							<span class="date">Saturday March 13, 2015</span>
    							<P>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab...</P>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="blog-teaser media">
    					<div class="media-left media-middle">
    						<div class="thumb">
    							<img src="assets/img/image-4.jpg" alt="">
    						</div>
    					</div>
    					<div class="media-body media-middle">
    						<div class="blog-text">
    							<h4>Lorem ipsum dolor sit amet</h4>
    							<span class="date">Saturday March 13, 2015</span>
    							<P>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab...</P>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="clearfix visible-lg visible-md">
    			<div class="col-md-6">
    				<div class="blog-teaser media">
    					<div class="media-left media-middle">
    						<div class="thumb">
    							<img src="assets/img/image-3.jpg" alt="">
    						</div>
    					</div>
    					<div class="media-body media-middle">
    						<div class="blog-text">
    							<h4>Lorem ipsum dolor sit amet</h4>
    							<span class="date">Saturday March 13, 2015</span>
    							<P>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab...</P>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="blog-teaser media">
    					<div class="media-left media-middle">
    						<div class="thumb">
    							<img src="assets/img/image-4.jpg" alt="">
    						</div>
    					</div>
    					<div class="media-body media-middle">
    						<div class="blog-text">
    							<h4>Lorem ipsum dolor sit amet</h4>
    							<span class="date">Saturday March 13, 2015</span>
    							<P>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab...</P>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
  		</div>
  	</div>
  </section>

	<?php include_once("footer.php"); ?>
</div><!--wrapper -->


</body>
</html>




