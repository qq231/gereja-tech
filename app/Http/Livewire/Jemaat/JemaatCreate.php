<?php

namespace App\Http\Livewire\Jemaat;

use App\Models\Jemaat;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class JemaatCreate extends Component
{
  public $isEdit = false;
  public $state = [
    'id' => null,
    'nama_lengkap' => null,
    'kelamin' => 0,
    'tempat_lahir' => null,
    'tgl_lahir' => null,
    'alamat' => null,
    'kab_kota' => null,
    'provinsi' => null,
    'mobile_phone' => null,
    'wa' => null,
    'fb' => null,
    'line' => null,
    'instagram' => null,
    'pekerjaan' => null,
    'status_pernikahan' => false,
    'pendidikan' => null,
    'status_jemaat' => 'ANGGOTA',
  ];

  public function render() {
    $jemaat = Jemaat::paginate(10);
    return view('livewire.jemaat.jemaat-create', [
      'jemaat' => $jemaat
    ]);
  }

  public function store() {
    $validate = Validator::validate($this->state, [
      'nama_lengkap' => 'required',
      'kelamin' => 'required',
      'tempat_lahir' => 'required',
      'tgl_lahir' => 'required',
      'mobile_phone' => 'required',
    ]);
    Jemaat::create($this->state);
    return redirect()->route('data-jemaat');
  }

  public function clear()
  {
      $this->reset();
  }
}