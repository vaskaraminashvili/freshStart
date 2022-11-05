<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DummyResource;
use App\Http\Resources\GeneralResource;
use App\Models\Dummy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class DummyController extends Controller
{
    public $data = [];

    public function __construct()
    {

        $method_name = request()->route()->getActionMethod();
        $customizable = array_key_exists($method_name, Dummy::$customizable) ? Dummy::$customizable[$method_name] : [];
        $customizable['currentModel'] = [
            'singular' => Dummy::$customizable['index']['model'],
            'plural' => Str::plural(Dummy::$customizable['index']['model']),
        ];
        $this->data = [
            'customizable' => $customizable,
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        foreach (Dummy::$customizable['index']['fields'] as $field) {
            if (isset($field['filterProps']['relation'])) {
                if ($field['filterProps']['relation']['type'] == 'belongsTo'){
                    $plural_field = Str::plural($field['filterProps']['relation']['name']);
                    $class = Str::plural($field['filterProps']['relation']['name'], 1);
                    $class = Str::ucfirst($class);
                    $class = 'App\Models\\' . $class;
                    $elements = $class::query()
                        ->get()
                        ->map(fn($item) => [
                            'id' => $item->id,
                            'name' => $item->name,
                        ]);

    //                $this->data['relations'][$plural_field] =  GeneralResource::collection($elements);
                    $this->data['relations'][$plural_field] = $elements;

                }
            }
        }
        $dummies = Dummy::query()
            ->with(['status', 'latestArticle'])
            ->customSearch()
            ->customSort()
            ->withTrashed()
            ->orderBy('id')->paginate(20)->withQueryString();
        $this->data['items'] = DummyResource::collection($dummies);
//        dd($this->data);
        $this->data['filters'] = request()->all(['search', 'field', 'direction']);
//        dd($this->data);
        return Inertia::render('@.dummy.index', $this->data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dummy = Dummy::withTrashed()->findOrFail($id);
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
