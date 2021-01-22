<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupon.index')->with('coupons', $coupons);
    }

    public function create()
    {
        return view('coupon.create');
    }

    public function store(Request $request)
    {
      $coupons = new Coupon;
      $coupons->guest_name = $request->guest_name;
      $coupons->status = $request->status;
      $coupons->save();

      return redirect('/coupon');
    }
}
