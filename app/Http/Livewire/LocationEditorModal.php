<?php

namespace App\Http\Livewire;

use App\Models\Coordinate;
use App\Models\Image;
use App\Models\Location;
use App\Models\Source;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class LocationEditorModal extends Component {

    use WithFileUploads;

    public $isVisible = False;
    protected $listeners = ['newLocationId'];

    public Location $location;
    public Coordinate $coordinate;
    public Source $source;

    public $recordId = '';
    public $tags = array();
    public $favorite = False;
    public $types = '';
    public $sources = '';
    public $imageFiles = array();
    public $images = array();
    public $latitude = '';
    public $longitude = '';
    public $source_name = '';

    /**
     * Array of rules for validation
     *
     * @var array
     */
    protected $rules = [
        'location.name' => 'required|unique|string|min:6',
        'location.description' => 'required|string|max:128',
        'location.type_id' => 'required|integer',
        'location.private' => 'required|boolean',
        'location.coordinate_id' => 'required|integer',
        'coordinate.latitude' => 'required|string|min:6',
        'coordinate.longitude' => 'required|string|min:6',
        'source.name' => 'required|string|max:128',
    ];

    /**
     * create a new record
     *
     * @param  mixed $id
     * @return void
     */
    public function createRecord() {

        $this->location = new Location();
        $this->coordinate = new Coordinate();
        $this->toggle();

    }

    /**
     * edit an existing record
     *
     * @param  mixed $id
     * @return void
     */
    public function editRecord() {
        If (isset($location)) {
            $this->reset();
        }

        $this->location = Location::with('type','favorite','sources','coordinate',
                                         'coordinate.maps','coordinate.what3words',
                                         'coordinate.address.country.flag','visits')
                                ->find($this->recordId)
                                ->withDmsFormat();
        $this->coordinate = $this->location->coordinate;
        $this->source_name = $this->location->sources[0]->name;
        $this->latitude = $this->location->coordinate->latitude;
        $this->longitude = $this->location->coordinate->longitude;
        $this->tags = $this->location->tagsToArray();
        $this->toggle();

    }

    /**
     * Update location_id with latest record
     *
     * @param  mixed $newLocationId
     * @return void
     */
    public function newLocationId($newLocationId) {
        $this->recordId = $newLocationId;
    }

    /**
     * Create data for dropdown menu's
     *
     * @return void
     */
    public function createDropdown() {

        $this->sources = Source::InTeam(Auth::user()->allTeamNames());
        $this->types = Type::InTeam(Auth::user()->allTeamNames());

        If (isset($this->location->name)) {
            $this->sources = $this->sources->FilterOut($this->location->sources[0]->name);
            $this->types = $this->types->FilterOut($this->location->type->name);
        }

        $this->sources = $this->sources->get();
        $this->types = $this->types->get();
    }

    /**
     * Toggle the property to show or hide Modal
     *
     * @return void
     */
    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    /**
     * Render the component
     *
     * @return void
     */
    public function render() {
        if (empty($this->sources)) {
            $this->createDropdown();
        }

        return view('livewire.location-editor-modal');
    }

    /**
     * Save uploaded images
     *
     * @return void
     */
    public function saveImages() {

        If ( count($this->imageFiles) > 0 ) {

            ForEach ($this->imageFiles as $imageFile) {
                $filename = Image::HashFileName($imageFile);
                $imageFile->storePubliclyAs('img-loc', $filename);
                $image = new Image([
                                'user_id' => Auth::user()->id,
                                'name' => $this->location->name,
                                'filename' => $filename
                            ]);
                array_push($this->images, $image);
            }

        }

    }

    /**
     * Save the coordinate
     *
     * @return void
     */
    public function saveCoordinate() {

        $this->coordinate = Coordinate::firstOrCreate([
                                'latitude' =>  $this->latitude,
                                'longitude' => $this->longitude
                                ]);
        $this->location->coordinate_id = $this->coordinate->id;

    }

    /**
     * Save the source
     *
     * @return void
     */
    public function saveSource() {

        $this->source = Source::InTeam(Auth::user()
                            ->allTeamNames())
                            ->firstOrCreate([
                                'name' =>  $this->source_name,
                                'user_id' => Auth::user()->id
                                ]);

    }

    /**
     * Save the location
     *
     * @return void
     */
    public function saveLocation() {

        $this->location->saveMeta();
        $this->location->save();
        $this->location->images()->saveMany($this->images);
        $this->location->coordinate()->associate($this->coordinate);
        If (!in_array($this->source->id, $this->location->sources->pluck('id')->toArray())) {
            $this->location->sources()->attach(($this->source));
        }
        $this->location->save();

    }

    /**
     * Save data in the component
     *
     * @return void
     */
    public function saveComponent() {

        $this->saveImages();
        $this->saveCoordinate();
        $this->saveSource();
        $this->saveLocation();

        $this->toggle();

    }

}
