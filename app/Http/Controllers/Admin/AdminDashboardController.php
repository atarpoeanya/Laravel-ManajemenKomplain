<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\layananUnit;
use App\Models\refUnit;
use App\Models\refLayanan;
use App\Models\kategori;
use App\Models\komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $refunit = refUnit::all();
        $reflayanan = refLayanan::all();
        $layananunit = layananUnit::all();
        $kategori = kategori::all();
        $komplain = komplain::all();
        
        return view('admin.adminDashboard', compact('refunit', 'reflayanan', 'layananunit','kategori','komplain'));
    }
}
