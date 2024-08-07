
<div>
    <h1>Profile: {{ $user->name }}</h1>

    <div style="margin-bottom: 20px;">
        @if($user->profile_photo)
            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" style="width: 150px; height: auto; border-radius: 50%;">
        @else
            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" style="width: 150px; height: auto; border-radius: 50%;">
        @endif
    </div>

    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Datos</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Personales</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Name</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->name }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Email</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->email }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Biography</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->biography }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Age</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->age }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('profile.edit') }}" style="display: inline-block; margin-top: 20px; padding: 10px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Edit Profile</a>
</div>
