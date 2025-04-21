@extends('master')
@section ('content')

    <!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Menu</li>
		</ol>
	</div>
	<!-- //page details -->

    <!-- menu -->
	<section class="portfolio py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Our <span>Menu</span></h3>
				<p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo.Nemo
					enim totam rem aperiam.</p>
			</div>
            
			<div class="row mt-4">
            @foreach($menu as $item)
				<div class="col-md-4">
					<div class="gallery-demo">
						<a href="#gal1">
							<img src="images/blog1.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">{{$item->pro_nam}} - <span>Rs {{$item->price}}</span></h4>
						</a>


						<a href="{{route('user.addcart1',['p_id'=>$item->product_id])}}">Add to Cart</a>
                        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
    Buy
</button>
					</div>
				</div>
                @endforeach
			</div>
            
		</div>
	</section>


	

@stop