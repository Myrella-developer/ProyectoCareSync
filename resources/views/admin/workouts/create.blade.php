
<div>
    <h1>Create New Workout</h1>

    <!-- Form to create a new workout -->
    <form action="{{ route('admin.workouts.store') }}" method="POST">
    <div>
            <label>Name</label>
            <input type="text" wire:model="name">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Description</label>
            <input type="text" wire:model="description">
            @error('description') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Duration Time</label>
            <input type="text" wire:model="durationTime">
            @error('durationTime') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Save</button>
    </form>
</div>
