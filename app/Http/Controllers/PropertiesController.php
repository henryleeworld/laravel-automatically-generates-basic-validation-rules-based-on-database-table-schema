<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertiesUpdateRequest;
use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PropertiesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('properties.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's properties information.
     */
    public function update(PropertiesUpdateRequest $request): RedirectResponse
    {
        Property::updateOrCreate(['user_id' => auth()->id()], $request->validated());
        return Redirect::route('properties.edit')->with('status', 'properties-updated');
    }
}
