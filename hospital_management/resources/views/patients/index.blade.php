<h2>Patient List</h2>

<a href="{{ route('patients.create') }}">Add Patient</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->age }}</td>
            <td>{{ $patient->gender }}</td>
            <td>{{ $patient->phone }}</td>
            <td>
                <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>

                <form action="{{ route('patients.destroy', $patient->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
