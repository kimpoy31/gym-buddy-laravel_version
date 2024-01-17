<form method="POST" class="w-100" action="{{route("workout.post")}}">
    @csrf
    <h4>Add Workout</h4>
    <hr>
    <div class="mb-3">
        <label class="form-label">Workout Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
        @error('name')
            <div class="text-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Weight (kg):</label>
        <input type="number" class="form-control @error('weight') is-invalid @enderror" name="weight">
        @error('weight')
            <div class="text-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Reps:</label>
        <input type="number" class="form-control @error('reps') is-invalid @enderror" name="reps">
        @error('reps')
            <div class="text-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(session('error'))
        <div class="alert alert-danger my-2" id="error-alert">
            {{ session('success') }}
        </div>
        <script>
            // Automatically close the success alert after 2 seconds
            setTimeout(function(){
                $('#error-alert').fadeOut('slow');
            }, 2000);
        </script>
    @elseif(session('success'))
        <div class="alert alert-success my-2" id="success-alert">
            {{ session('success') }}
        </div>
        <script>
            // Automatically close the success alert after 2 seconds
            setTimeout(function(){
                $('#success-alert').fadeOut('slow');
            }, 2000);
        </script>
    @endif
</form>
