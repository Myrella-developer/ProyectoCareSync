<div>
    <h1>Your Favorite Workouts</h1>

    @if($favoriteWorkouts->isEmpty())
        <p>You have no favorite workouts yet.</p>
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
                @foreach($favoriteWorkouts as $workout)
                    <tr>
                        <td>{{ $workout->name }}</td>
                        <td>{{ $workout->description }}</td>
                        <td>{{ $workout->durationTime }}</td>
                        <td>
                            <form action="{{ route('favorites.remove', $workout->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Remove from favorites?');" style="color: red; border: none; background: none; cursor: pointer;">Remove from Favorites</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
