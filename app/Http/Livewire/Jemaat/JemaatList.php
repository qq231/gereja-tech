<?php

namespace App\Http\Livewire\Jemaat;

use App\Models\Jemaat;
use Livewire\Component;

class JemaatList extends Component
{
  public function render() {
    $jemaat = Jemaat::paginate(10);
    return view('livewire.jemaat.jemaat-list', [
      'jemaat' => $jemaat
    ]);
  }
}