<?php

namespace app\Http\Controllers\Admin;

use App\Anggota; //MODEL ANGGOTA
use App\Simpanan; //MODEL SIMPANAN
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\BerandaRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      return view('admin/home');
    }
}
