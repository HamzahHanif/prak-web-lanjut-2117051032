<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class KelasController extends BaseController
{
    protected $helpers=['Form'];
    public $kelasModel;

    public function __construct()
    {
       
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data=[
            'title'=>'List Kelas',
            'kelas'=> $this->kelasModel->getKelas(),
        
        ];
        return view('list_kelas',$data);
        //
    }

    public function create(){
       
        $kelas =$this->kelasModel -> getKelas();

        $data = [
            'kelas' => $kelas,
            
        ];

        return view('create_kelas',$data);
    }

    public function store(){
        if(!$this->validate([
            'nama_kelas' => [
                'rules' => 'required|is_unique[kelas.nama_kelas]',
                'errors' => [
                    'required' => 'Kelas wajib di isi!',
                    'is_unique' => 'Kelas tidak tersedia'
                ]
            ]
        ])) {

            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];

        $this->kelasModel->saveKelas($data);
        return redirect()->to('/kelas');

    }

    public function edit($id)
    {
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];

        return view('edit_kelas', $data);
    }

    public function update($id){
        
        $data = [
            'nama_kelas'  => $this->request->getVar('nama_kelas'),
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id)
    {
        $result = $this->kelasModel->deleteKelas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
            ->with('success', 'Berhasil menghapus data');
    }
   
}

