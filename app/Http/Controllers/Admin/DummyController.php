<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Dummy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DummyResource;
use App\Http\Requests\StoreDummyRequest;

class DummyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Dummy::query();
        // think to move this code inside trait or something esle
        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:name,email'], // this may come in future from the model
            ]);

        if (request('search')) {
            $query->where('name', 'LIKE', '%'.request('search').'%');
        }

        if (request()->has(['field' , 'direction'])) {
            $query->orderBy(request('field'), request('direction'));
        }

        $dummies = $query->orderBy('id')->paginate(20)->withQueryString();
        // think to move this code inside trait or something esle
        $tt = DummyResource::collection($dummies);
        return Inertia::render('@.dummy.index', [
            'dummies' => $tt,
            'filters' => request()->all(['search' , 'field' , 'direction'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dummy $dummy)
    {
        $dummy = [
            'id' => $dummy->id,
            'name' => $dummy->name,
            'email' => $dummy->email,
            'address' => $dummy->address,
            'phone' => $dummy->phone,
            'amount' => $dummy->amount,
        ];

        return Inertia::render('@.dummy.edit', [
            'dummy' => $dummy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Dummy $dummy, Request $request)
    {
//        dd($request->all());
//
//        $test = [
//            'name' => "$request->name",
//            'email' => 'admi@asdas.com',
//            'address' => 'address',
//            'phone' => 123123,
//            'amount' => 40.0,
//        ];

//        $dummy->update($test);
        $dummy->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}