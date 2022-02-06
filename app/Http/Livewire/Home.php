<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jemaat;
use Illuminate\Support\Carbon;

class Home extends Component
{
  public $birthdayToday;
  public $birthdayMonth;

    public function render()
    {
      $this->getBirthday();
        return view('livewire.home');
    }

    protected function getBirthday() {
      $date = Carbon::now();
      $this->birthdayToday = Jemaat::whereMonth('tgl_lahir', '=', $date->format("m"))
                ->whereDay('tgl_lahir', '=', $date->format("d"))
                ->orderBy('nama_lengkap')
                ->get();
      $this->birthdayMonth = Jemaat::whereMonth('tgl_lahir', '=', $date->format("m"))
                ->orderBy('nama_lengkap')
                ->get();
    }
}
