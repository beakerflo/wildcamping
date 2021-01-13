<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SourcesTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;
    public $team = '';

    public function getRecordDetails($id) {
        $this->record = Source::with('locations')->find($id);
    }

    public function setTeam() {
        If ($this->team == '') {
            $this->team = Auth::User()->currentTeam->name;
        }
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        $this->setTeam();

        $Sources = Source::InTeam($this->team)->Search($this->search)->with('locations');

        return view('livewire.sources-table', [
            'RecordDetails' => $this->record,
            'Count' => number_format($Sources->count(),0,",","."),
            'Records' => $Sources->simplePaginate($this->paginate),
            'Team' => $this->team
        ]);
    }
}
