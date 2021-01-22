@extends('layouts.main')

    @section('title')
        tambah data
    @endsection

    @section('content')
    <form action="{{url('coupon/store')}}" method="POST" class="mt-4">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="guest_name">Guest Name</label>
          <input name="guest_name" type="text" class="form-control" id="guest_name" placeholder="Masukkan nama">
        </div>
        <label for="statusTamu">Status</label>
        <div class="form-check">
            <input name="status" class="form-check-input" type="checkbox" value="1" id="true">
            <label class="form-check-label" for="true">
              True
            </label>
          </div>
        <div class="form-check">
            <input name="status" class="form-check-input" type="checkbox" value="0" id="false">
            <label class="form-check-label" for="false">
              False
            </label>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
      </form>  
    @endsection

