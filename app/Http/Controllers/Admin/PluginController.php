<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PluginController extends Controller
{
    public function plugins()
    {
        return Inertia::render('@.module.index');
    }

    public function index()
    {
        return Inertia::render('@.about');
    }

    public function edit()
    {
        return Inertia::render('@.about');
    }
}