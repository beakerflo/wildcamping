<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class ImagesTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 12;

    public function getRecordDetails($id) {
        $this->record = Image::with('location','location.images','location.coordinate.address.country.flag')
                            ->find($id);
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        $Images = Image::search($this->search)
                    ->with('location','location.images','location.coordinate.address.country.flag');

        return view('livewire.images-table', [
            'RecordDetails' => $this->record,
            'Count' => number_format($Images->count(),0,",","."),
            'Records' => $Images->simplePaginate($this->paginate),
        ]);
    }
}
