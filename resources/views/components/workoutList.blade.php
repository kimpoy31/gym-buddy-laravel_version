<div class="d-flex flex-column gap-3">
  @foreach($workouts as $workout)
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="w-100 d-flex justify-content-between">
          <h4 class="card-title">{{ $workout->name }}</h4>
          <div>
            <a href="{{ route('workout.edit', ['id' => $workout->id]) }}" class="btn btn-secondary edit-workout-link">Edit</a>
            <button class="btn btn-danger">delete</button>
          </div>
        </div>
       
        <div>
          <p class="m-0">Weight: {{ $workout->weight }} kg</p>
          <p class="m-0">Reps: {{ $workout->reps }}</p>
          <p class="m-0">Created at: {{ $workout->created_at->format('m/d/Y H:i:s') }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>