<?php

namespace App\Http\Controllers\User;

use App\Models\komplain;
use App\Models\layananUnit;
use App\Models\refUnit;
use App\Models\refLayanan;
use App\Models\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function __construct() {
          $this->middleware('auth');
        }

        public function index() {
        $refunit = refUnit::all();
        $reflayanan = refLayanan::all();
        $layananunit = layananUnit::all();
        $kategori = kategori::all();
        $komplain = komplain::all();
        return view('user.dashboard', compact('refunit', 'reflayanan', 'layananunit','kategori','komplain'));
        }


}
