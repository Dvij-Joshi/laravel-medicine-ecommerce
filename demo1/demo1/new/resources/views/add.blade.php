@extends('master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('Success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('Success') }}",
        });
    </script>
@endif


<!-- banner -->
<div class="main-banner-2">

</div>
<!-- //banner -->
<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Login Page</li>
    </ol>
</div>
<!-- //page details -->

<!-- PRODUCT PAGE --> 
<div class="login-contect py-5">
    <div class="container py-xl-5 py-3">
        <div class="login-body">
            <div class="login p-4 mx-auto">
                <h5 class="text-center mb-4">Add Product</h5>
                <form action="/submitproduct" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Product Price</label>
                        <input type="text" class="form-control" name="product_price" placeholder="" required="">
                    </div>

                    <div class="form-group">
                        <label class="mb-2">Product Color</label>
                        <input type="text" class="form-control" name="product_color" placeholder="" required="">
                    </div>

                    <div class="form-group">
                        <label class="mb-2">Product Quantity</label>
                        <input type="text" class="form-control" name="product_qty" placeholder="" required="">
                    </div>


                    <button type="submit" class="btn submit mb-4">Add Product</button>

                </form>
            </div>
        </div>
    </div>
</div>


@stop