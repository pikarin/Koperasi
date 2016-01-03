<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Simpanan; //MODEL SIMPANAN
use Illuminate\Http\Request;
use App\Repositories\SimpananRepository;
use Maatwebsite\Excel\Facades\Excel;

class SimpananController extends Controller
{
    /**
   * Create a new controller instance.
   */
  public function __construct(SimpananRepository $simpanans, SimpananRepository $anggotas)
  {
      $this->middleware('auth');

      $this->simpanans = $simpanans;
      $this->anggotas = $anggotas;
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return json_decode(json_encode($anggotas));
      return view('simpanans.index', [
          'simpanans' => $this->simpanans->forUser($request->user()),
          'anggotas' => $this->anggotas->untukUser($request->user()),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request, [

         ]);

        $value = array(
        'user_id' => $request->user()->id,
        'anggota_id' => $request->nama,
        'simpanan_wajib' => $request->simpanan_wajib,
        'simpanan_sukarela' => $request->simpanan_sukarela,
        'tanggal_pembayaran' => date('Y-m-d'),
      );
        DB::table('simpanans')->insert($value);

        return redirect('administrator/simpanan');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function export(Request $request)
    {
      $simpanans = DB::table('Simpanans')
                  ->join('anggotas', 'simpanans.anggota_id', '=', 'anggotas.id')
                  ->where('simpanans.user_id', $request->user()->id)
                  ->get();
      Excel::create('Data Simpanan Koperasi', function($excel) use ($simpanans){

        // SET PROPERTIES
        $excel->setTitle('Data Simpanan Koperasi')
              ->setCreator('Egi Nugraha');

        $excel->sheet('Data Simpanan', function($sheet) use ($simpanans){
          $row = 1;
          $sheet->setAutoFilter('A1:D1')
                ->setStyle(array(
                  'font' => array(
                    'name' => 'Calibri',
                    'size' =>  12,
                    'bold' =>  false
                  )
                ));
          $sheet->row($row, array(
            'TANGGAL PEMBAYARAN',
            'NAMA ANGGOTA',
            'SIMPANAN WAJIB',
            'SIMPANAN SUKARELA'
          ));
          foreach ($simpanans as $simpanan){
            $sheet->row(++$row, array(
              $simpanan->tanggal_pembayaran,
              $simpanan->nama,
              $simpanan->simpanan_wajib,
              $simpanan->simpanan_sukarela
            ));
          }
        });
      })->export('xlsx');
    }
}
