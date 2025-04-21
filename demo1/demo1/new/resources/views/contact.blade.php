@extends('master')
@section ('content')

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
	<!-- //page details -->

    <!-- contact -->
	<section class="ab-info-main py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Contact <span>Us</span></h3>
				<p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo.Nemo
					enim totam rem aperiam.</p>
			</div>
			<div class="row contact-agileinfo pt-lg-4">
				<!-- contact address -->
				<div class="col-md-5 address">
					<h3 class="footer-title mb-4 pb-lg-2">Our Address</h3>
					<div class="row address-info-w3ls">
						<div class="col-3 address-left">
							<img src="images/c1.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Address</h5>
							<p> California, USA</p>
						</div>
					</div>
					<div class="row address-info-w3ls my-2">
						<div class="col-3 address-left">
							<img src="images/c2.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Email</h5>
							<p>
								<a href="mailto:example@email.com"> mail@example.com</a>
							</p>
						</div>
					</div>
					<div class="row address-info-w3ls">
						<div class="col-3 address-left">
							<img src="images/c3.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Phone</h5>
							<p>+1 234 567 8901</p>
						</div>
					</div>
				</div>
				<!-- //contact address -->
				<!-- contact form -->
				<div class="col-lg-7 contact-right mt-lg-0 mt-5">
					<form action="#" method="post">
						<div class="row">
							<div class="col-lg-6 form-group pr-lg-2">
								<input type="text" class="form-control" name="Name" placeholder="Name" required="">
							</div>
							<div class="col-lg-6 form-group pl-lg-2">
								<input type="email" class="form-control" name="Email" placeholder="Email" required="">
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="Phone" placeholder="Phone" required="">
						</div>
						<div class="form-group">
							<textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
						</div>
						<button type="submit" class="btn submit-contact-main ml-auto">Submit</button>
					</form>
				</div>
				<!-- contact form -->
			</div>
		</div>
	</section>
	<!-- contact -->

@stop