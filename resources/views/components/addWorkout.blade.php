<form method="POST" class="w-100">
    @csrf
    <h4>Add Workout</h4>
    <hr>
    <div class="mb-3">
        <label class="form-label">Workout Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Weight:</label>
        <input type="number" class="form-control" name="weight">
    </div>
    <div class="mb-3">
        <label class="form-label">Reps:</label>
        <input type="number" class="form-control" name="reps">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
