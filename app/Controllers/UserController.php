<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function profile($nama ="", $npm =""): string
    {
        $data=[
            'nama'=>$nama,
            'npm'=>$npm
        ];
        return view('profile',$data);
    }
    public function create()
    {
        return view('create_user');
    }
    public function store()
    {
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $data=[
            'nama'=>$nama,
            'npm'=>$npm
        ];
        // dd($data);
        return view('profile',$data);
    }
}
