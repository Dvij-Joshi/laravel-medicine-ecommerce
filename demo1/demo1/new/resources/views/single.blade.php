@extends('master')
@section ('content')

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Single Page</li>
		</ol>
	</div>
	<!-- //page details -->


    <!-- single page -->
	<div class="single-page py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Info</p>
				<h3 class="w3ls-title">Single <span>Page</span></h3>
			</div>
			<div class="inner-sec">
				<div class="row">
					<!-- left side -->
					<div class="col-lg-8 left-blog-info text-left">
						<div class="blog-grid-top">
							<div class="b-grid-top">
								<div class="blog_info_left_grid">
									<a href="single.html">
										<img src="images/single1.jpg" class="img-fluid" alt="">
									</a>
								</div>
							</div>

							<h3>
								<a href="single.html" class="single-text text-da font-weight-light">Nemo enim ipsam
									voluptatem quia voluptas
									sit aspernatur aut odit aut fugit 2018</a>
							</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
								incididunt ut labore et
								dolore magna
								aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip
								exea commodo consequat
								duis
								aute irudre dolor in elit sed uta labore dolore reprehender</p>
							<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor
								in elit sed uta
								labore dolore reprehender</p>
							<p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco
								labor nisi ut
								<span class="text-blog-single">aliquip exea commodo consequat duis aute irudre dolor in
									elit
									sed uta labore dolore
									reprehender</span>
							</p>
							<div class="mt-sm-4 mt-3">
								<p>Elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad
									minim ven iam quis
									nostrud
									exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
									dolor in elit sed uta
									labore
									dolore reprehender</p>
								<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre
									dolor in elit sed uta
									labore dolore reprehender</p>
								<p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation
									ullamco labor nisi ut
									aliquip exea
									<span class="text-blog-single">commodo consequat duis aute irudre dolor in elit sed
										uta
										labore dolore reprehender</span>
								</p>
							</div>
							<h3>
								<a href="single.html" class="single-text text-da font-weight-light">Nemo enim ipsam
									voluptatem quia voluptas
									sit aspernatur aut odit aut fugit 2019</a>
							</h3>
							<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor
								in elit sed uta
								labore dolore reprehender</p>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor
								incididunt ut labore et
								dolore magna
								aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip
								exea commodo consequat
								duis
								aute irudre dolor in elit sed uta labore dolore reprehender</p>
						</div>

						<div class="comment-top">
							<h4>Comments</h4>
							<div class="media">
								<img src="images/te3.jpg" alt="" class="img-fluid" />
								<div class="media-body">
									<h5 class="mt-0">Joseph Goh</h5>
									<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim
										sapien velit id felis ac
										cursus eros.
										Cras a ornare elit.</p>
								</div>
							</div>
							<div class="media mt-3">
								<a class="d-flex pr-3" href="#">
									<img src="images/te2.jpg" alt="" class="img-fluid" />
								</a>
								<div class="media-body">
									<h5 class="mt-0">Richard Spark</h5>
									<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id
										dignissim sapien velit id felis ac
										cursus eros.
										Cras a ornare elit.</p>
								</div>
							</div>
						</div>
						<div class="comment-top">
							<h4>Leave a Comment</h4>
							<div class="comment-bottom">
								<form action="#" method="post">
									<div class="form-group">
										<input class="form-control" type="text" name="Name" placeholder="Name"
											required="">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" name="Email" placeholder="Email"
											required="">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="Subject" placeholder="Subject"
											required="">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="Message" placeholder="Message..."
											required=""></textarea>
									</div>
									<button type="submit" class="btn btn-primary submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
					<!-- //left side -->
					<!-- right side -->
					<aside class="col-lg-4 right-blog-con text-right mt-lg-0 mt-5">
						<div class="right-blog-info text-left">
							<div class="tech-btm">
								<h4>Sign up to our newsletter</h4>
								<p>Pellentesque dui, non felis. Maecenas male </p>
								<form action="#" method="post">
									<input class="form-control" name="email" type="email" placeholder="Email"
										required="">
									<input class="form-control" type="submit" value="Subscribe">
								</form>
							</div>
							<div class="category-story tech-btm">
								<h4>More Stories</h4>
								<ul class="list-unstyled">
									<li class="border-bottom mb-3 pb-3">
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
									<li class="border-bottom mb-3 pb-3">
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
									<li class="border-bottom mb-3 pb-3">
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
									<li class="border-bottom mb-3 pb-3">
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
									<li class="border-bottom mb-3 pb-3">
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
									<li>
										<i class="fa fa-angle-right mr-2"></i>
										<a href="#" class="text-blog-single">sed do eiusmod tempor incididunt ut labore
											et
											dolore magna aliqua</a>
									</li>
								</ul>
							</div>
							<div class="tech-btm">
								<img src="images/blog1.jpg" class="img-fluid" alt="">
							</div>
							<div class="tech-btm">
								<h4>Categories</h4>
								<ul class="list-group single">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Dapibus ac facilisis in
										<span class="badge badge-primary badge-pill">2</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										Morbi leo risus
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
							</div>
							<div class="tech-btm">
								<h4>Top stories of the week</h4>

								<div class="blog-grids row mb-3">
									<div class="col-md-5 blog-grid-left">
										<a href="single.html">
											<img src="images/blog1.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="col-md-7 blog-grid-right mt-2">
										<h5>
											<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis
											</a>
										</h5>
										<div class="sub-meta">
											<span>
												<i class="far fa-clock"></i> 20 Jan, 2018</span>
										</div>
									</div>
								</div>
								<div class="blog-grids row mb-2">
									<div class="col-md-5 blog-grid-left">
										<a href="single.html">
											<img src="images/blog2.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="col-md-7 blog-grid-right mt-3">
										<h5>
											<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis
											</a>
										</h5>
										<div class="sub-meta">
											<span>
												<i class="far fa-clock"></i> 20 Feb, 2018</span>
										</div>
									</div>
								</div>
							</div>
							<div class="single-gd tech-btm">
								<h4>Recent Post</h4>
								<div class="blog-grids">
									<div class="blog-grid-left">
										<a href="single.html">
											<img src="images/blog1.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="blog-grid-right">
										<h5 class="mt-0">
											<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
										</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</aside>
					<!-- //right side -->
				</div>
			</div>
		</div>
	</div>
	<!-- //single -->

@stop