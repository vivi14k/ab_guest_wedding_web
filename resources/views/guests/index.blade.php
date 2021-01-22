<link rel="stylesheet" href="{{asset('css')}}/main.css">
@extends('layouts.main')

@section('title')
    guest
@endsection
@section('content')
<div class="container">
    <a class="btn btn-lg btn-primary mt-4 m-6" href="{{url('/guest/create')}}" role="button">Tambah Data</a>
    <table id="myTable" class="table table-bordered table-hover ">
        <thead class="bg-primary text-white">
            <tr>
                <th>No</th>
                <th>Keluarga</th>
                <th>Jumlah Kupon</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$guest->name}}</td>
            <td>{{$guest->coupon}}</td>
            <td>
                @if ($guest->attendee_status==1)
                    Hadir 
                @else 
                    Menunggu
                @endif
            
            </td>
            <td><a href="/guest/pilihKupon/{{$guest->id}}" class="btn btn-lg btn-primary">Setup Kupon</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

