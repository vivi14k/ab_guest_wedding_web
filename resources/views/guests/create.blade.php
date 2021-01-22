<link rel="stylesheet" href="{{asset('css')}}/create.css">
@extends('layouts.main')
    @section('title')
        tambah data
    @endsection

    @section('content')
    <form action="{{url('guest/store')}}" method="POST" class="">
        {{ csrf_field() }}
        <div class="wrap">
        <div class="form-group ml-4 mr-4">
          <label for="name">Nama</label>
          <input name="nama" type="text" class="form-control" id="name" placeholder="Masukkan nama">
        </div>
        <div class="form-group ml-4 mr-4">
          <label for="coupon">Kupon</label>
          <input name="coupon" type="text" class="form-control" id="coupon" placeholder="Masukkan Kupon">
        </div>
        <label for="atendeeStatus" class="ml-4">Status Kehadiran</label>
        <div class="form-check ml-4">
            <input name="attendee_status" class="form-check-input" type="checkbox" value="1" id="true">
            <label class="form-check-label ml-4"  for="true">
              Hadir 
            </label>
          </div>
        <div class="form-check ml-4">
            <input name="attendee_status" class="form-check-input" type="checkbox" value="0" id="false">
            <label class="form-check-label ml-4" for="false">
              Menunggu
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary mt-4 ml-4">Tambah Data</button>
        </div>
      </form>  
    @endsection