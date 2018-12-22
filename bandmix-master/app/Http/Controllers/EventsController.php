<?php

namespace App\Http\Controllers;

use App\Entities\Band;
use App\Entities\Genre;
use App\Entities\Event;
use App\Entities\EventGenre;
use App\Entities\Act;

use Illuminate\Support\Facades\Mail;
use App\Mail\BandConfirm;

use App\Repositories\BandRepository;
use App\Repositories\EventGenreRepository;
use App\Repositories\GenreRepository;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\EventRepository;
use App\Validators\EventValidator;


/**
 * Class EventsController.
 *
 * @property LocationRepository locationRespository
 * @package namespace App\Http\Controllers;
 */
class EventsController extends Controller
{
    /**
     * @var EventRepository
     */
    protected $repository;

    /**
     * @var EventValidator
     */
    protected $validator;
    protected $bandRespository;

    /**
     * EventsController constructor.
     *
     * @param EventRepository $repository
     * @param EventValidator $validator
     */

    /**
     * EventsController constructor.
     * @param EventRepository $repository
     * @param EventValidator $validator
     * @param LocationRepository $locationRepository
     *  @param BandRepository $bandRepository
     */

    public function __construct(EventRepository $repository, EventValidator $validator, LocationRepository $locationRepository, BandRepository $bandRepository)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->locationRespository = $locationRepository;
        $this->bandRespository = $bandRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $locations = $this->locationRespository->all();
        $events_search = $this->repository->query($request->all())->latest()->paginate(12);
        $events = $this->repository->findWhere([
            'is_on_top' => 1
        ]);
        return view('events.index', compact('events','events_search','locations'));
    }

    public function create(Request $request)
    {
        $bands = Band::all();
        $genres = Genre::all();
        $locations = $this->locationRespository->all();
        return view('events.create',compact('genres','bands','locations'))  ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EventCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EventCreateRequest $request)
    {
        // try {
        //     $data = $request->all();

        //     $data['member_id'] = Auth::id();

        //     if($request->hasFile('avatar')){
        //         $data['avatar'] = $this->uploadFile($request['avatar']);
        //     }else{
        //         $data['avatar'] = 'uploads/avatar/default.jpg';
        //     }

        //     $event = $this->repository->create($data);

        //     $request['slug'] = str_slug($event->name, '-') . '-n'. $event->id;
        //     $this->repository->update($request->only('slug'), $event->id);
        //     $response = [
        //         'message' => 'Event created.',
        //         'data'    => $event->toArray(),
        //     ];
        //     $event->bands()->sync($data['band']);

        //     $event->bands()->sync($data['band']);
        //     foreach ($data['item_name'] as $key => $value)
        //     {
        //         $event->bands()->attach($data['band'][$key], ['act' => $value]);
        //     }

        //     return redirect()->route('events.show',$event->id)->with('message', $response['message']);
        // } catch (ValidatorException $e) {
        //     if ($request->wantsJson()) {
        //         return response()->json([
        //             'error'   => true,
        //             'message' => $e->getMessageBag()
        //         ]);
        //     }
        //     return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        // }
        // dd($request->all()); 
        $data = $request->all();
        if(empty($data['event_id'])) {
            $data['member_id'] = Auth::id();
            $data['status'] = '0';
            $data['slug'] = str_slug($data['name'], '-');

            if($request->hasFile('avatar')){
                $data['avatar'] = $this->uploadFile($request->avatar);
            } else {
                $data['avatar'] = 'uploads/avatar/default.jpg';
            }

            $event = $this->repository->create($data);
            EventGenre::create(['event_id' => $event->id, 'genre_id' => $data['genre']]);
            
            if(count($data['item_name']) > 1) {
                $event_id = $event->id;
                $total_item = count($data['item_name']);
                for($i = 1; $i < $total_item; $i++) {
                    $data_act[] = [
                        'act' => $data['item_name'][$i],
                        'band_id' => $data['band'][$i],
                        'event_id' => $event_id
                    ];
                    $band = Band::find($data['band'][$i]);
                    // Mail::to($band->email)->send(new BandConfirm($event->name));
                } 
                Act::insert($data_act);
            }
        } else {
            if($request->hasFile('avatar')){
                $data['avatar'] = $this->uploadFile($request->avatar);
            }
            $event = $this->repository->update($data, $data['event_id']);
            EventGenre::where('event_id', $data['event_id'])->delete();
            EventGenre::create(['event_id' => $event->id, 'genre_id' => $data['genre']]);

            Act::where('event_id', $data['event_id'])->delete();
            if(count($data['item_name']) > 1) {
                $event_id = $event->id;
                $total_item = count($data['item_name']);
                for($i = 1; $i < $total_item; $i++) {
                    $data_act[] = [
                        'act' => $data['item_name'][$i],
                        'band_id' => $data['band'][$i],
                        'event_id' => $event_id
                    ];
                } 
                Act::insert($data_act);
            }

        }
        $locations = $this->locationRespository->all();
        $events_search = $this->repository->query($request->all())->latest()->paginate(12);
        $events = $this->repository->findWhere([
            'is_on_top' => 1
        ]);
        return view('events.index', compact('events','events_search','locations'));
    }
    public function manage(){
        $locations = $this->locationRespository->all();
        $member_id = Auth::id();
        $events = $this->repository->findWhere(['member_id' => $member_id]);
        return view('events.manage',compact('events','locations'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $event,
            ]);
        }

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bands = Band::all();
        $genres = Genre::all();
        $event = Event::find($id);
        $acts = Act::where('event_id', $id)->get();
        return view('events.edit', compact('event', 'bands', 'genres', 'acts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EventUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EventUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $event = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Event updated.',
                'data'    => $event->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Event deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Event deleted.');
    }

    public function detail(Request $request, $id){
        // $event = $this->repository->findByField('id',$id)->first();
        $event_genre = Event::join('event_genre', 'events.id', '=', 'event_genre.event_id')
        ->join('genres', 'genres.id', '=', 'event_genre.genre_id')
        ->leftJoin('locations','locations.id', '=','events.location_id')
        ->selectRaw('events.* , locations.name as location_name, genres.name as genres_name')
        ->where('events.id', '=', $id)
        ->where('events.status', '=', 1)
        ->get();

        $event = $event_genre->first();
        $acts = Act::where('event_id', $id)->get();
        $data['event_genre'] = $event_genre;
        $data['act'] = $acts;
        $data['event'] = $event;

        return view('events.detail', $data);
    }
    
    public function uploadFile($file) {
        $file->move(public_path('uploads/avatar'), $file->getClientOriginalName());
        return 'uploads/avatar/'.$file->getClientOriginalName();
    }

    public function deleteEvent($id) {
        $deleted = $this->repository->delete($id);
        return redirect()->back();
    }
}
