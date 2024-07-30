<div>
    <h1>Edit Workout</h1>

    <!-- Form to edit an existing workout -->
    <form action="{{ route('admin.workouts.update', $workout->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $workout->name) }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description', $workout->description) }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="durationTime">Duration (in minutes):</label>
            <input type="number" id="durationTime" name="durationTime" value="{{ old('durationTime', $workout->durationTime) }}" required>
            @error('durationTime')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update Workout</button>
    </form>
</div>

