<?php

namespace App\Http\Livewire;
use App\Models\Sale;
use Livewire\Component;

class Search extends Component
{
    public $term = "";

    public function render()
    {
        sleep(1);
        $sales = Sale::search($this->term)->paginate(10);

        $data = [
            'sales' => $sales,
        ];

        return view('livewire.search', $data);
    }
}
