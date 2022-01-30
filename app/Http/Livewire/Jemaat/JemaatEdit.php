<?php

namespace App\Http\Livewire\Jemaat;

use App\Models\Jemaat;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class JemaatEdit extends Component
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
  public $jemaat;

  public function mount($jemaatId) {
    $this->jemaat = Jemaat::find($jemaatId);
    $this->state['nama_lengkap'] = $this->jemaat->nama_lengkap;
    $this->state['kelamin'] = $this->jemaat->kelamin;
    $this->state['tempat_lahir'] = $this->jemaat->tempat_lahir;
    $this->state['tgl_lahir'] = $this->jemaat->tgl_lahir;
    $this->state['alamat'] = $this->jemaat->alamat;
    $this->state['kab_kota'] = $this->jemaat->kab_kota;
    $this->state['provinsi'] = $this->jemaat->provinsi;
    $this->state['mobile_phone'] = $this->jemaat->mobile_phone;
    $this->state['wa'] = $this->jemaat->wa;
    $this->state['fb'] = $this->jemaat->fb;
    $this->state['line'] = $this->jemaat->line;
    $this->state['instagram'] = $this->jemaat->instagram;
    $this->state['pekerjaan'] = $this->jemaat->pekerjaan;
    $this->state['status_pernikahan'] = $this->jemaat->status_pernikahan;
    $this->state['pendidikan'] = $this->jemaat->pendidikan;
    $this->state['status_jemaat'] = $this->jemaat->status_jemaat;
  }

  public function render() {
    return view('livewire.jemaat.jemaat-edit', [
      'jemaat' => $this->jemaat
    ]);
  }

  public function delete() {
    Jemaat::destroy($this->jemaat->id);
    return redirect()->route('data-jemaat');
  }

  public function store() {
    Validator::validate($this->state, [
      'nama_lengkap' => 'required',
      'kelamin' => 'required',
      'tempat_lahir' => 'required',
      'tgl_lahir' => 'required',
      'mobile_phone' => 'required',
    ]);
    if ($this->state['status_pernikahan']) {
      $this->state['status_pernikahan'] = 1;
    } else {
      $this->state['status_pernikahan'] = 0;
    }
    $this->jemaat->nama_lengkap = $this->state['nama_lengkap'];
    $this->jemaat->kelamin = $this->state['kelamin'];
    $this->jemaat->tempat_lahir = $this->state['tempat_lahir'];
    $this->jemaat->tgl_lahir = $this->state['tgl_lahir'];
    $this->jemaat->alamat = $this->state['alamat'];
    $this->jemaat->kab_kota = $this->state['kab_kota'];
    $this->jemaat->provinsi = $this->state['provinsi'];
    $this->jemaat->mobile_phone = $this->state['mobile_phone'];
    $this->jemaat->wa = $this->state['wa'];
    $this->jemaat->fb = $this->state['fb'];
    $this->jemaat->line = $this->state['line'];
    $this->jemaat->instagram = $this->state['instagram'];
    $this->jemaat->pekerjaan = $this->state['pekerjaan'];
    $this->jemaat->status_pernikahan = $this->state['status_pernikahan'];
    $this->jemaat->pendidikan = $this->state['pendidikan'];
    $this->jemaat->status_jemaat = $this->state['status_jemaat'];
    $this->jemaat->save();
    // Jemaat::updated($this->state, ['id' => $this->jemaat->id]);
    // Jemaat::update($validate);
    return redirect()->route('data-jemaat');
  }

  public function clear()
  {
      $this->reset();
  }
}