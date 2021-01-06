<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Livewire\Component;
use Livewire\WithPagination;

class SourcesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $source = '';
    public $paginate = 24;

    public function getLocationDetails($id) {
        $this->source = Source::with('locations')->find($id);
    }

    public function render() {
        $Sources = Source::Search($this->search)->with('locations');

        return view('livewire.sources-table', [
            'RecordDetails' => $this->source,
            'RecordsCount' => number_format($Sources->count(),0,",","."),
            'Records' => $Sources->simplePaginate($this->paginate),
        ]);    }
}
