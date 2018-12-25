<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CartCreateRequest;
use App\Http\Requests\CartUpdateRequest;
use App\Repositories\CartRepository;
use App\Validators\CartValidator;

/**
 * Class CartsController.
 *
 * @property EventRepository eventRepository
 * @package namespace App\Http\Controllers;
 */
class CartsController extends Controller
{
    /**
     * @var CartRepository
     */
    protected $repository;

    /**
     * @var CartValidator
     */
    protected $validator;

    /**
     * CartsController constructor.
     *
     * @param CartRepository $repository
     * @param CartValidator $validator
     */
    public function __construct(CartRepository $repository, CartValidator $validator, EventRepository $eventRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->eventRepository = $eventRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//            $event = $this->eventRepository->all();
//        $this->eventRepository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
//        $carts = $this->eventRepository->all();
//
//        if (request()->wantsJson()) {
//
//            return response()->json([
//                'data' => $carts,
//            ]);
//        }

        return view('cart.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CartCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['member_id'] = Auth::id();
        $data['event_id'] = $request['event_id'];
        $this->repository->create($data);
        $event = $this->eventRepository->find($data['event_id']);
        $total = $event->price*$data['number_of_ticket'];
        Cart::add(['id' => $data['event_id'], 'name' => $event->name, 'qty' => 1, 'price' => $event->price,
            'options' => [
                'location_detail' => $event->location_detail,
                'avatar' => $event->avatar,
                'number_of_ticket' => $data['number_of_ticket'],
                'total' => $total,
                'member_id' => $data['member_id']
            ]]);
        ;
        $event = $this->eventRepository->update(['vacancy' => $event->vacancy - $data['number_of_ticket']],$data['event_id']);
        return redirect()->route('cart.show')->with('success_message', 'Đã thêm thành công vào giỏ hàng');
    }


    public function buySuccess(Request $request){
        $book = $request->all();

    }
   
    public function empty()
    {

        Cart::destroy();
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
        $cart = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cart,
            ]);
        }

        return view('carts.show', compact('cart'));
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
        $cart = $this->repository->find($id);

        return view('carts.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CartUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CartUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $cart = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Cart updated.',
                'data' => $cart->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error' => true,
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

        Cart::remove($id);
//        $deleted = $this->repository->delete($id);
//        if (request()->wantsJson()) {
//
//            return response()->json([
//                'message' => 'Cart deleted.',
//                'deleted' => $deleted,
//            ]);
//        }

        return redirect()->back()->with('message', 'Cart deleted.');
    }
}
