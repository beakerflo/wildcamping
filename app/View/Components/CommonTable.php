<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Image;
use App\Models\Location;
use App\Models\Source;
use App\Models\Visit;

class CommonTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model = '', $orderBy = 'created_at', $paginate = 8)
    {
        $this->model = $model;
        $this->orderBy = $orderBy;
        $this->paginate = $paginate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {
        Switch($this->model) {
            case 'Location':
                $records = Location::orderBy($this->orderBy)
                                ->with('type','favorite','sources','coordinate.address.country.flag');
                break;

            case 'Source':
                $records = Source::with('locations');
                break;
            case 'Visit':
                $records = Visit::with('location', 'location.type','location.sources','location.coordinate.address.country.flag');
                break;

            case 'Image':
                $records = Image::with('location','location.images','location.coordinate.address.country.flag');
                break;
        }

        return view('components.common-table-' . $this->model, [
            'Count' => number_format($records->count(),0,",","."),
            'Records' => $records->simplePaginate($this->paginate)
        ]);
    }
}
