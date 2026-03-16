<h2>Edit Patient</h2>

<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $patient->name }}"><br><br>

    <label>Age:</label>
    <input type="number" name="age" value="{{ $patient->age }}"><br><br>

    <label>Gender:</label>
    <input type="text" name="gender" value="{{ $patient->gender }}"><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ $patient->phone }}"><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('patients.index') }}">Back</a>
