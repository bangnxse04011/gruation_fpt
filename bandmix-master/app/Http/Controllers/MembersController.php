<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Requests\MemberUpdateRequest;
use App\Repositories\MemberRepository;
use App\Validators\MemberValidator;

/**
 * Class MembersController.
 *
 * @package namespace App\Http\Controllers;
 */
class MembersController extends Controller
{
    /**
     * @var MemberRepository
     */
    protected $repository;

    /**
     * @var MemberValidator
     */
    protected $validator;
    protected $cartRepository;

    /**
     * MembersController constructor.
     *
     * @param MemberRepository $repository
     * @param MemberValidator $validator
     * @param CartRepository $cartRepository
     */
    public function __construct(MemberRepository $repository, MemberValidator $validator,CartRepository $cartRepository)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->cartRepository = $cartRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $member = $this->repository->findWhere(['id'=>$id]);
//        return view('members.index', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MemberCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(MemberCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $member = $this->repository->create($request->all());
            dd($member);
            $request['slug'] = str_slug($member->name, '-') . '-n'.$member->id;
            $this->repository->update($request->only('slug'),$member->id);
            $response = [
                'message' => 'Member created.',
                'data'    => $member->toArray(),
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
    public function manage()
    {
        $member_id = Auth::id();
        $cart = $this->cartRepository->findWhere(['member_id' => $member_id]);
        return view('member.manage',compact('cart'));
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
        $member = $this->repository->find($id);
        if (request()->wantsJson()) {

            return response()->json([
                'data' => $member,
            ]);
        }

        return view('members.index', compact('member'));
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
        $member = $this->repository->find($id);

        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MemberUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(MemberUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
//            dd($request->all());
            if($request->hasFile($request['avatar'])){
                $member = $this->repository->update($request->all(), $id);
            }else{
                $member = $this->repository->update($request->except('avatar'), $id);
            }

            $response = [
                'message' => 'Member updated.',
                'data'    => $member->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('members.index', $member->id)->with('message', $response['message']);
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
                'message' => 'Member deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Member deleted.');
    }
}
