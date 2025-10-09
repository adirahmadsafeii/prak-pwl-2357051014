<?php

namespace App\Http\Controllers;

use App\Models\Kelas;  // ✅ Models huruf besar M
use App\Models\UserModel;  // ✅ Models huruf besar M
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();  // ✅ Huruf besar
        $this->kelasModel = new Kelas();  // ✅ Huruf besar
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        // Gunakan property yang sudah dibuat di constructor
        $kelas = $this->kelasModel->getKelas();
        
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        
        return view('create_user', $data);
    }
}