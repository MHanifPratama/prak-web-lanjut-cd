<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KelasModel;
class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelas_model = new KelasModel();
        $kelas_model->save([
            'nama_kelas' => 'A',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'B',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'C',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'D',
        ]);
    }
}
