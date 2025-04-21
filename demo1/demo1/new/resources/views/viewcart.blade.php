@extends('master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="/viewcart" method="post">
	@csrf
    <title>Product Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .button {
            padding: 5px 10px;
            background-color: #008CBA;
            color: white;
            border: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #005f73;
        }
    </style>
</head>
<body>

    <h1>Item added to Cart</h1>
    
    <table>
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Name of Product</th>
                <th>Qty</th>
                <th>Amount</th>
                <th>Action</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            
           
        @foreach ($menuitem as $display)
<tr>
    <td>{{ $display->productid }}</td>
    <td>{{ $display->product_name }}</td> <!-- Product name -->
    <td>{{ $display->qty }}</td> <!-- Quantity -->
    <td>{{ $display->product_price * $display->qty }}</td> <!-- Total price -->
    <td class="action-buttons">
        <button class="button">+</button>
        <button class="button">-</button>
    </td>
    <td>
       
    <a href="{{ route('user.deleteCart', ['Cartid' => $display->cartid]) }}" class="btn btn-success">Remove</a>
    
</td>
</tr>
@endforeach
        </tbody>
    </table>

</body>
</html>

        


@stop