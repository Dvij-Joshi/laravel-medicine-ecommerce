@extends('master')
@section('content')
<table>
    <tr>
    <th>User Name</th>
    <th>User Email</th>
    <th>User Password</th>
    <th>User Status</th>
    </tr>
    @foreach($user as $users)
    <tr>
        <td>{{$users->reg_name}}</td>
        <td>{{$users->reg_email}}</td>
        <td>{{$users->reg_pass}}</td>
        <td>{{$users->status}}</td>
    </tr>
    @endforeach
</table>


@stop