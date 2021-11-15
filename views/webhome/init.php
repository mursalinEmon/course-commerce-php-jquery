

<!--================================
         START SLIDER AREA
=================================-->
<!-- 2nd Home Slider -->
<div class="home2-slider">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-banner-wrapper">
					    <div class="banner-style-one owl-theme owl-carousel">
					        <div class="slide slide-one sh2" style="background-image: url(assets/images/home/4.jpg);height: 500px;width:100%;">
					            <div class="container">
					                <div class="row">
					                    <div class="col-lg-12 text-center">
					                        <h3 class="banner-title">Start Investing in You</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block">
					                            <a href="#" class="banner-btn">Ready to get Started?</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="slide slide-one sh2" style="background-image: url(assets/images/home/5.jpg);height: 500px;width:100%;">
					            <div class="container">
					                <div class="row">
					                    <div class="col-lg-12 text-center">
					                        <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block">
					                            <a href="#" class="banner-btn">Ready to get Started?</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="slide slide-one sh2" style="background-image: url(assets/images/home/6.jpg); height: 500px;width:100%;">
					            <div class="container">
					                <div class="row">
					                    <div class="col-lg-12 text-center">
					                        <h3 class="banner-title">Start Investing in You</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block">
					                            <a href="#" class="banner-btn">Ready to get Started?</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="carousel-btn-block banner-carousel-btn">
					        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
					        <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
					    </div><!-- /.carousel-btn-block banner-carousel-btn -->
					</div><!-- /.main-banner-wrapper -->
				</div>
			</div>
		</div>
	</div>
<section id="our-top-courses" class="our-courses">
		<div class="container" style="padding-right: 60px; padding-left: 60px;">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Browse Our Top Courses</h3>
						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
					</div>
				</div>
			</div>
 			<div class="row">
			 <div class="col-md-12">
					<div class="row justify-content-center" style="padding-right: 20px; padding-left: 20px;">
						<?php foreach($this->courses as $key=>$val){?>

						<div class="col-lg-6 col-xl-4">
							<div class="top_courses ">
								<div class="thumb">
									<img class="img-whp" src="assets/images/courses/<?php echo $val['xitemcode'];?>.jpg" alt="t1.jpg" style="height:200px!important;width:100%;">
									<div class="overlay">
										<div class="tag">Best Seller</div>
										<div class="icon"><small style="font-size:12px;" class=" p-1 pt-2 pb-2 border border-danger rounded-circle bg-danger"><?php echo $val['xdisc'];?>%</small></div>
										<!-- <div class="icon"><span class="flaticon-like"></span></div> -->
										<a class="tc_preview_course" href="<?php echo URL;?>courses/coursedetail/<?php echo $val['xitemcode'];?>">Preview Course</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content" style="height:10rem;overflow:hidden;">
										<!-- <p>Ali TUFAN</p> -->
										<h5 style="height:5.5rem;overflow:hidden;"><a href="<?php echo URL;?>courses/coursedetail/<?php echo $val['xitemcode'];?>"><?php echo $val['xdesc'] ?></a></h5>

										<div class="cart-button">
											
											<a href="javascript:void(0)" onClick="addtocart('<?php echo $val['xitemcode'];?>','<?php echo $val['xdesc'];?>','<?php echo $val['xstdprice'];?>')" class="btn btn-outline btn-success btn-outline-2x">Enroll Course</a>
											
                                		</div>
										<!-- <ul class="tc_review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul> -->
									</div>
									<div class="tc_footer">
										<ul class="tc_meta float-left">
											<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
											<li class="list-inline-item"><a href="#">1548</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="#">25</a></li>
										</ul>
										<div class="tc_price float-right disc_price font-weight-bold" style="font-size:12px;margin-left:1rem;"><del><span>৳<?php echo $val['xmrp'];?></del></span></div>
										<div class="tc_price float-right ">৳<?php echo $val['xstdprice'];?></div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>

					</div>

				</div>
				<div class="col-lg-6 offset-lg-3">
					<div class="courses_all_btn text-center">
						<a class="btn btn-transparent" href="#">View All Courses</a>
					</div>
				</div>
 			</div>
		</div>
	</section>

	<!-- Divider -->
	<section class="divider_home2 parallax bg-img2" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="color-white mt0">Scholl Achievements</h3>
						<p class="color-white">Here you can review some statistics about our Education Center</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<div class="icon"><span class="flaticon-student-3"></span></div>
						<div class="details">
							<ul>
								<li class="list-inline-item"><div class="timer">650</div></li>
								<li class="list-inline-item"><span>+</span></li>
							</ul>
							<h5>Students learning</h5>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<div class="icon"><span class="flaticon-cap"></span></div>
						<div class="details">
							<div class="timer">583</div>
							<h5>Graduates</h5>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<div class="icon"><span class="flaticon-jigsaw"></span></div>
						<div class="details">
							<div class="timer">6</div>
							<h5>Free courses</h5>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<div class="icon"><span class="flaticon-online-learning"></span></div>
						<div class="details">
							<div class="timer">8</div>
							<h5>Active courses</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog Post -->
	<section class="our-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Upcoming Events</h3>
						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="blog_post_slider_home2">
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="4.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="5.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>An Overworked Newspaper Editor</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="4.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="5.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>An Overworked Newspaper Editor</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="4.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>A Solution Built for Teachers</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post_home2">
								<div class="bph2_header">
									<img class="img-fluid" src="assets/images/background/N7.png" alt="5.jpg">
									<a href="#" class="bph2_date_meta">
										<span class="year">28 <br> March</span>
									</a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Dhaka, Bangladesh</a></li>
										</ul>
									</div>
									<h4>An Overworked Newspaper Editor</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Popular Courses -->
	<section class="popular-courses bgc-thm2">
		<div class="container-fluid style2">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0 color-white">Popular Courses</h3>
						<p class="color-white">Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="popular_course_slider">
					<?php foreach($this->courses as $key=>$val){?>
						<div class="item">
							<div class="top_courses home2 mb0">
								<div class="thumb">
									<img class="img-whp" src="assets/images/courses/<?php echo $val['xitemcode'];?>.jpg" alt="t1.jpg">
									<div class="overlay">
										<div class="tag">Top Seller</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="<?php echo URL;?>courses/coursedetail/<?php echo $val['xitemcode'];?>">Preview Course</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<!-- <p>Ali TUFAN</p> -->
										<h5><a href="<?php echo URL;?>courses/coursedetail/<?php echo $val['xitemcode'];?>"><?php echo $val['xdesc'] ?></a></h5>
										<!-- <ul class="tc_review">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#">(6)</a></li>
										</ul> -->
									</div>
									<div class="tc_footer">
										<ul class="tc_meta float-left">
											<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
											<li class="list-inline-item"><a href="#">1548</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="#">25</a></li>
										</ul>
										<div class="tc_price float-right"><?php echo $val['xstdprice'];?></div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<!-- <section id="our-testimonials" class="our-testimonial">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">What People Say</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial_slider_home2">
						<div class="item">
							<div class="testimonial_item home2">
								<div class="details">
									<div class="icon"><span class="fa fa-quote-left"></span></div>
									<p>It was really fun getting to know the team during the project. They were all helpful in answering my questions and made me feel completely at ease.The design ended up being twice as good as I could have ever envisioned!</p>
								</div>
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="assets/images/testimonial/1.jpg" alt="1.jpg">
									<div class="title">Aura Brooks</div>
									<div class="subtitle">Graphic Designer, Owl Eyes</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_item home2">
								<div class="details">
									<div class="icon"><span class="fa fa-quote-left"></span></div>
									<p>It was really fun getting to know the team during the project. They were all helpful in answering my questions and made me feel completely at ease.The design ended up being twice as good as I could have ever envisioned!</p>
								</div>
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="assets/images/testimonial/2.jpg" alt="2.jpg">
									<div class="title">Ali TUFAN</div>
									<div class="subtitle">Client</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_item home2">
								<div class="details">
									<div class="icon"><span class="fa fa-quote-left"></span></div>
									<p>It was really fun getting to know the team during the project. They were all helpful in answering my questions and made me feel completely at ease.The design ended up being twice as good as I could have ever envisioned!</p>
								</div>
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="assets/images/testimonial/3.jpg" alt="3.jpg">
									<div class="title">Jack Graham</div>
									<div class="subtitle">Co founder, Coffee Inc</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_item home2">
								<div class="details">
									<div class="icon"><span class="fa fa-quote-left"></span></div>
									<p>It was really fun getting to know the team during the project. They were all helpful in answering my questions and made me feel completely at ease.The design ended up being twice as good as I could have ever envisioned!</p>
								</div>
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="assets/images/testimonial/1.jpg" alt="1.jpg">
									<div class="title">Ali TUFAN</div>
									<div class="subtitle">Client</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_item home2">
								<div class="details">
									<div class="icon"><span class="fa fa-quote-left"></span></div>
									<p>It was really fun getting to know the team during the project. They were all helpful in answering my questions and made me feel completely at ease.The design ended up being twice as good as I could have ever envisioned!</p>
								</div>
								<div class="thumb">
									<img class="img-fluid rounded-circle" src="assets/images/testimonial/2.jpg" alt="2.jpg">
									<div class="title">Jack Graham</div>
									<div class="subtitle">Co founder, Coffee Inc</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt60">
				<div class="col-sm-6 col-lg-6 col-xl-6">
					<div class="becomea_instructor tac-xxsd">
						<div class="bi_grid">
							<h3>Become an Instructor</h3>
							<p>Teach what you love. Dove Schooll gives you the tools to create an <br class="dn-lg"> online course.</p>
							<a class="btn btn-thm" href="#">Start Teaching <span class="flaticon-right-arrow-1"></span></a>							
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 col-xl-6">
					<div class="becomea_instructor style2 text-right tac-xxsd">
						<div class="bi_grid">
							<h3>Dove School For Business</h3>
							<p>Get unlimited access to 2,500 of Udemy’s top courses for <br class="dn-lg"> your team.</p>
							<a class="btn btn-dark" href="#">Doing Business <span class="flaticon-right-arrow-1"></span></a>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
