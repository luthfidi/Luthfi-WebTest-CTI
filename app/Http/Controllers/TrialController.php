<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrialRequest;
use App\Models\Trial;

class TrialController extends Controller
{
    public function store(TrialRequest $request)
    {
        // Get validated data
        $validated = $request->validated();
        
        // Convert 'on' to boolean for agreement field
        $validated['agreement'] = true; // Since it's already validated as 'accepted', we can set it to true
        
        // Create the trial
        Trial::create($validated);

        // Rest of your code (redirect, flash message, etc.)
        return redirect()->back()->with('success', 'Trial request submitted successfully!');
    }
}