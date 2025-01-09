<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrialRequest;
use App\Models\Trial;
use App\Mail\TrialRequested;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller;

class TrialController extends Controller
{
    public function submit(TrialRequest $request)
    {
        // Get validated data
        $validated = $request->validated();
        
        // Convert 'on' to boolean for agreement field
        $validated['agreement'] = true;
        
        // Create the trial
        $trial = Trial::create($validated);

        // Send email
        try {
            Mail::to($trial->email)->send(new TrialRequested($trial));
            \Log::info('Email sent successfully');
            
            return redirect()->back()->with('success', 'Trial request submitted successfully! Please check your email.');
        } catch (\Exception $e) {
            \Log::error('Mail error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return redirect()->back()
                ->with('error', 'Your request was saved but we encountered an issue sending the email.')
                ->withInput();
        }
    }
}
