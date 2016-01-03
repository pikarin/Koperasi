<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['no_identitas', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'pekerjaan', 'telepon', 'tanggal_daftar'];

   /**
    * Get the simpanans.
    */
   public function simpanans()
   {
       return $this->hasMany('App\Simpanan');
   }
}
