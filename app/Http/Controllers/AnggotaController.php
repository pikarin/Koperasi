<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Gate;
use App\Anggota; //MODEL ANGGOTA
use App\Simpanan; //MODEL SIMPANAN
use Illuminate\Http\Request;
use App\Repositories\AnggotaRepository;

class AnggotaController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(AnggotaRepository $anggotas, AnggotaRepository $simpanans)
    {
        $this->middleware('auth');

        $this->anggotas = $anggotas;
        $this->simpanans = $simpanans;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return json_decode(json_encode($anggotas));
        return view('anggotas.index', [
          'anggotas' => $this->anggotas->forUser($request->user()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $anggotas = Anggota::findOrFail($id);

        $simpanans = Simpanan::where('anggota_id', $id)->get();
        $simpananswajib = Simpanan::where('anggota_id', $id)->sum('simpanan_wajib');
        $simpananssukarela = Simpanan::where('anggota_id', $id)->sum('simpanan_sukarela');

        if (Gate::denies('show_anggotas', $anggotas)){
          abort(403);
        }else {
          return view('anggotas.show', compact('anggotas'), [
          'simpanans' => $simpanans,
          'anggotas' => $anggotas,
          'simpananswajib' => $simpananswajib,
          'simpananssukarela' => $simpananssukarela,
      ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
