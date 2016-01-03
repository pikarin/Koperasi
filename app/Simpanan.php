<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'anggota_id', 'simpanan_wajib', 'simpanan_sukarela', 'tanggal_pembayaran'];

   /**
    * Get the anggota_id that owns the simpanans.
    */
   public function anggotas()
   {
       return $this->belongsTo('App\Anggota', 'anggota_id');
   }
}
