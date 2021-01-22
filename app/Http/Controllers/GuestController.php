<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    private $DataTamu;

    public function __construct(){
        $this->DataTamu =  new Guest();
    }

    public function index()
    {
        $guests = Guest::all();
        return view('guests.index')->with('guests', $guests);
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
      $guests = new Guest;
      $guests->name = $request->nama;
      $guests->coupon = $request->coupon;
      $guests->attendee_status = $request->attendee_status;
      $guests->save();

      return redirect('/guest');
    }

    public function pilihKupon($id){
       $guest = Guest::find($id);

    //    var_dump($guest);
       return view('guests.pilihKupon')->with ('coupon', $guest->coupon);

    }


    public function tambahKupon(){
       return redirect()->route("kupon"); 
    }
}
