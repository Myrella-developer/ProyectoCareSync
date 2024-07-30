<div>
    <h1>Workouts</h1>
    <a href="{{ route('admin.workouts.create') }}">Create New Workout</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workouts as $workout)
                <tr>
                    <td>{{ $workout->name }}</td>
                    <td>{{ $workout->description }}</td>
                    <td>{{ $workout->durationTime }}</td>
                    <td>
                        <a href="{{ route('admin.workouts.edit', $workout->id) }}">Edit</a>
                        <button wire:click="delete({{ $workout->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
