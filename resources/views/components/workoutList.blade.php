<div class="d-flex flex-column gap-3">
  @foreach($workouts as $workout)
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="w-100 d-flex justify-content-between">
          <h4 class="card-title">{{ $workout->name }}</h4>
          <div>
            <a href="{{ route('workout.edit', ['id' => $workout->id]) }}" class="btn btn-secondary edit-workout-link">Edit</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal_{{ $workout->id }}">delete</button>
          </div>
        </div>
       
        <div>
          <p class="m-0">Weight: {{ $workout->weight }} kg</p>
          <p class="m-0">Reps: {{ $workout->reps }}</p>
          <p class="m-0">Created at: {{ $workout->created_at->format('m/d/Y H:i:s') }}</p>
        </div>
      </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="myModal_{{ $workout->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this workout <span class="text-danger">{{ $workout->name }}</span>? 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- Add your delete functionality here -->
            <form method="POST" action="{{ route('workout.delete', ['id' => $workout->id]) }}">
                @csrf
                @method('DELETE') {{-- Use the correct HTTP method for deleting --}}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endforeach
</div>
