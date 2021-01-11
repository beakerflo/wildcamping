<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Livewire\Component;
use Livewire\WithPagination;

class VisitsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;

    public function getRecordDetails($id) {
        $this->record = Visit::with('location', 'location.type','location.sources','location.coordinate.address.country.flag')
                            ->find($id);
    }

    public function render() {
        $Visits = Visit::search($this->search)
                    ->with('location', 'location.type','location.sources','location.coordinate.address.country.flag');

        return view('livewire.visits-table', [
            'RecordDetails' => $this->record,
            'Count' => number_format($Visits->count(),0,",","."),
            'Records' => $Visits->simplePaginate($this->paginate),
        ]);
    }
}
