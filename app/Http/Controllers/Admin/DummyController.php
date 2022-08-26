<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dummy;
use Illuminate\Http\Request;
use Inertia\Inertia;

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

        $dummies = $query->orderBy('id')->paginate(20);

        // think to move this code inside trait or something esle

        return Inertia::render('@.dummy.index', [
            'dummies' => $dummies,
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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