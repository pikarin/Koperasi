<?php

namespace app\Http\Controllers;

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
    public function __construct(BerandaRepository $simpanans, BerandaRepository $anggotas)
    {
        $this->middleware('auth');

        $this->anggotas = $anggotas;
        $this->simpanans = $simpanans;
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      // $this->total = Anggota::all()->count();
      // $this->simpanan_wajib = Simpanan::sum('simpanan_wajib');
      // $this->simpanan_sukarela = Simpanan::sum('simpanan_sukarela');
      return view('home', [
          'anggotas' => $this->anggotas->Anggota($request->user()),
          'simpanans_wajib' => $this->simpanans->SimpananWajib($request->user()),
          'simpanans_sukarela' => $this->simpanans->SimpananSukarela($request->user()),
      ]);
    }
}
