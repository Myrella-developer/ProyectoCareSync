<div>
    <h1>Workouts</h1>
    <a href="{{ route('admin.workouts.create') }}">Create New Workout</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workouts as $workout)
                <tr>
                    <td>{{ $workout->name }}</td>
                    <td>{{ $workout->description }}</td>
                    <td>{{ $workout->durationTime }} minutes</td>
                    <td>
                        @if($workout->image)
                            <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->name }}" style="width: 100px; height: auto;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.workouts.edit', $workout->id) }}">Edit</a>

                        <!-- Form to delete a workout -->
                        <form action="{{ route('admin.workouts.destroy', $workout->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this workout?');" style="color: red; border: none; background: none; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
