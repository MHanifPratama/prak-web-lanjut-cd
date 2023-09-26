<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function profile($nama ="", $npm ="",$kelas=""): string
    {
        $data=[
            'nama'=>$nama,
            'npm'=>$npm,
            'kelas'=>$kelas
        ];
        return view('profile',$data);
    }
    public function create()
    {
        $kelas = [
            [
                'id'=>1,
                'nama_kelas'=>'A'
            ],
            [
                'id'=>2,
                'nama_kelas'=>'B'
            ],
            [
                'id'=>3,
                'nama_kelas'=>'C'
            ],
            [
                'id'=>4,
                'nama_kelas'=>'D'
            ],
        ];
        $data=[
            'kelas'=>$kelas
        ];
        return view('create_user',$data);
    }

    public function store()
    {
        
        $userModel = new UserModel();
        $kelasModel = new KelasModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');
        dd($this->request->getPost('kelas')) ;

        // Validate
        if (!$this->validate([
            'nama' => 'required',
            'npm'=>[
                'rules'=>'required|numeric|is_unique[user.npm]',
                'errors'=>[
                    'required'=>'NPM harus diisi',
                    'numeric'=>'NPM harus berupa angka',
                    'is_unique'=>'NPM sudah terdaftar'
                ]
            ],
            'kelas' => 'required'
        ])) {
            return redirect()->to('/user/create')->withInput()->with('validation', $this->validator);
        }
        $data=[
            'nama'=>$nama,
            'npm'=>$npm,
            'id_kelas'=>$kelas
        ];

        $userModel->saveUser($data);
        $data_new=[
            'nama'=>$nama,
            'npm'=>$npm,
            'id_kelas'=>$kelasModel->find($kelas)['nama_kelas']
        ];
        return view('profile',$data_new);
    }
}
