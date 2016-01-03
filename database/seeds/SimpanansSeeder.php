<?php

use Illuminate\Database\Seeder;

class SimpanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('simpanans')->delete();

        $simpanans = [
            ['user_id' => 1,
          'anggota_id' => 1,
          'simpanan_wajib' => 30000,
          'simpanan_sukarela' => 40000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ['user_id' => 1,
          'anggota_id' => 2,
          'simpanan_wajib' => 10000,
          'simpanan_sukarela' => 15000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ['user_id' => 2,
          'anggota_id' => 3,
          'simpanan_wajib' => 15000,
          'simpanan_sukarela' => 10000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ['user_id' => 2,
          'anggota_id' => 4,
          'simpanan_wajib' => 10000,
          'simpanan_sukarela' => 15000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ['user_id' => 1,
          'anggota_id' => 3,
          'simpanan_wajib' => 15000,
          'simpanan_sukarela' => 10000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ['user_id' => 2,
          'anggota_id' => 5,
          'simpanan_wajib' => 10000,
          'simpanan_sukarela' => 15000,
          'tanggal_pembayaran' => '1992-05-17',
        ],
        ];

        DB::table('simpanans')->insert($simpanans);
    }
}
