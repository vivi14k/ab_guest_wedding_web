<link rel="stylesheet" href="{{asset('css')}}/main.css">
@extends('layouts.main')
@section('title')
    coupon
@endsection

@section('content')
<div class="container">
<table class="table table-bordered table-hover mt-4">
<thead class="bg-primary text-white">
    <tr>
    <th scope="col">NO</th>
    <th scope="col">NAMA TAMU</th>
    <th scope="col">STATUS</th>
    </tr>
</thead>
    @foreach ($coupons as $coupon)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$coupon->guest_name}}</td>
    <td>{{$coupon->status}}</td>
    </tr>
    @endforeach
    <tbody>
</table>
</div>
@endsection

