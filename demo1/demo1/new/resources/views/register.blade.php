@extends('master')
@section ('content')

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Register Page</li>
		</ol>
	</div>
	<!-- //page details -->

    <div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Register Now</h5>
					<form action="/submitdata" method="post">
                        @csrf
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="mb-2">Password</label>
							<input type="password" class="form-control" name="password" id="password1" placeholder=""
								required="">
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control" name="password" id="password2" placeholder=""
								required="">
						</div>
						<button type="submit" class="btn submit mb-4">Register</button>
						<p class="text-center">
							<a href="#" class="text-da">By clicking Register, I agree to your terms</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

@stop