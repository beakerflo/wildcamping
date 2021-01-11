<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Livewire\Component;
use Livewire\WithPagination;

class SourcesTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;

    public function getRecordDetails($id) {
        $this->record = Source::with('locations')->find($id);
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        $Sources = Source::Search($this->search)->with('locations');

        return view('livewire.sources-table', [
            'RecordDetails' => $this->record,
            'Count' => number_format($Sources->count(),0,",","."),
            'Records' => $Sources->simplePaginate($this->paginate),
        ]);
    }
}
