<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ModulesController extends Controller
{
    public function index()
    {
        $modules = Module::withTrashed()->get();
        $data['items'] = $modules;
        return Inertia::render('@.moduleManager.index' , $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Module $module)
    {
    }

    public function edit(Module $module)
    {
        $data['item'] = $module;
        return Inertia::render('@.moduleManager.edit', $data);
    }

    public function update(Request $request, Module $module)
    {
    }

    public function destroy(Module $module)
    {
    }
}
