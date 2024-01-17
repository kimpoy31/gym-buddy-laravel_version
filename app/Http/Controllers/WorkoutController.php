<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    function workoutPost(Request $request){
        if(!Auth::check()){
            return redirect()->intended(route("login"));
        }

        // validate if data are provided
        $request->validate([
            'name' => 'required',
            'weight' => 'required|numeric',
            'reps' => 'required|numeric',
        ]);

        // Get the authenticated user's ID
        $userId = Auth::id();

        $workout = Workout::create([
            'name' => $request->input('name'),
            'weight' => $request->input('weight'),
            'reps' => $request->input('reps'),
            'userId' => $userId,
        ]);

        if(!$workout){
            return redirect(route("home"))->with("error","Name , Weight or Reps is not valid");
        }

        return redirect(route("home"))->with("success","Workout added successful");
    }

    function workout(Request $request, $id){
        if(!Auth::check()){
            return redirect()->intended(route("login"));
        }

        $validatedData = $request->validate([
            'id' => 'exists:workouts,id',
            'userId' => 'exists:users,id|in:' . Auth::id(),
        ]);

        $workout = Workout::findOrFail($id);

        // Pass the workout data to the view for editing
        return view('components.editWorkout', compact('workout'));
    }
}
