<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class ImagesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $image = '';
    public $paginate = 24;

    public function getLocationDetails($id) {
        $this->location = Image::with('location','location.images','location.coordinate.address.country.flag')->find($id);
    }

    public function render() {
        $Images = Image::with('location','location.images','location.coordinate.address.country.flag');

        return view('livewire.images-table', [
            'RecordDetails' => $this->image,
            'RecordsCount' => number_format($Images->count(),0,",","."),
            'Records' => $Images->simplePaginate($this->paginate),
        ]);
    }
}
