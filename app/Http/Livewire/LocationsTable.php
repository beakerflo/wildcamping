<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Models\Source;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class LocationsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $type = '';
    public $source ='';

    public function render()
    {
        return view('livewire.locations-table',[
            'Locations' => Location::search($this->search)->OfType($this->type)->FromSource($this->source)->with('type','favorite','sources','coordinate.address.country.flag')->Paginate(24),
            'Sources' => Source::orderBy('name', 'asc')->get(),
            'Types' => Type::orderBy('name', 'asc')->get(),
        ]);
    }
}
