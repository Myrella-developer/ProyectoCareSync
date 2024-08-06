<div>
    <h1>Create New Workout</h1>

    <!-- Form to create a new workout -->
    <form action="{{ route('admin.workouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="durationTime">Duration (in minutes):</label>
            <input type="number" id="durationTime" name="durationTime" value="{{ old('durationTime') }}" required>
            @error('durationTime')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image">Photo</label>
            <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg">
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Create Workout</button>
    </form>
</div>
