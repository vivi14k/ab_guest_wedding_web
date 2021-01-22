<link rel="stylesheet" href="{{asset('css')}}/create.css">
@extends('layouts/main')
@section("title", "Pilih Kupon")
<link rel="stylesheet" href="{{asset('css')}}/style.css">

@section('content')
<div class="container">
    <div class="col-md-6 d-flex flex-column">
        <form action="/guest/tambahKupon" method="POST">
            @csrf
            @for ($i = 1; $i <= $coupon; $i++)
            <input class="kupon" name="coupon_{{$i}}" >

            {{-- <select name="coupon_{{$i}}">
                <option>Pilihan 1</option>
                <option>Pilihan 2</option>
                <option>Pilihan 3</option>
            </select > --}}
            @endfor
        <div class="setWrapper">
            
        </div>
        <div class="button-side mt-5">
            <button type="submit" style="width: 25%;" name="submit" class="btn btn-lg btn-primary">Kirim</button>
        </div>
        </form>
    </div>
</div>
  @endsection