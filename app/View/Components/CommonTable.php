<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Image;
use App\Models\Location;
use App\Models\Source;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;

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
                $records = Location::InTeam(Auth::User()->currentTeam->name)->orderBy($this->orderBy)->with('type','favorite','sources','coordinate.address.country.flag');
                break;

            case 'Source':
                $records = Source::InTeam(Auth::User()->currentTeam->name)->with('locations');
                break;
            case 'Visit':
                $records = Visit::InTeam(Auth::User()->currentTeam->name)->with('location', 'location.type','location.sources','location.coordinate.address.country.flag');
                break;

            case 'Image':
                $records = Image::InTeam(Auth::User()->currentTeam->name)->with('location','location.images','location.coordinate.address.country.flag');
                break;
        }

        return view('components.common-table-' . $this->model, [
            'Count' => number_format($records->count(),0,",","."),
            'Records' => $records->simplePaginate($this->paginate)
        ]);
    }
}
