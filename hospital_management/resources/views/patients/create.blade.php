<h2>Add Patient</h2>

<form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name"><br><br>

    <label>Age:</label>
    <input type="number" name="age"><br><br>

    <label>Gender:</label>
    <input type="text" name="gender"><br><br>

    <label>Phone:</label>
    <input type="text" name="phone"><br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="{{ route('patients.index') }}">Back to List</a>
