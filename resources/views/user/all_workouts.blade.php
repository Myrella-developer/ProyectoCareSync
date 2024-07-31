<div>
    <h1>Choice your Favorite Workouts</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($workouts->isEmpty())
        <p>No workouts available at the moment.</p>
    @else
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
                            @if(auth()->user()->favoriteWorkouts->contains($workout->id))
                                <form action="{{ route('favorites.remove', $workout->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Remove from favorites?');" style="color: red; border: none; background: none; cursor: pointer;">Remove from Favorites</button>
                                </form>
                            @else
                                <form action="{{ route('favorites.add', $workout->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" style="color: green; border: none; background: none; cursor: pointer;">Add to Favorites</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
