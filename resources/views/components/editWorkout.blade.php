@extends('layout')
@section("title", "Edit")
@section('content')

<div class="p-4" style="max-width: 480px">
    <form method="POST" class="w-100" action="{{route("workout.patch", ['id' => $workout->id])}}">
        @csrf
        @method('PATCH')
        <h4>Edit Workout</h4>
        <hr>
        <div class="mb-3">
            <label class="form-label">Workout Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$workout->name}}">
            @error('name')
                <div class="text-danger my-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Weight (kg):</label>
            <input type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{$workout->weight}}">
            @error('weight')
                <div class="text-danger my-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Reps:</label>
            <input type="number" class="form-control @error('reps') is-invalid @enderror" name="reps" value="{{$workout->reps}}">
            @error('reps')
                <div class="text-danger my-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection