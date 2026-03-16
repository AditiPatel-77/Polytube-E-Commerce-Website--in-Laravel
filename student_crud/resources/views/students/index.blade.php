<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Student List</h2>

<a href="{{ url('/student/create') }}">Add New Student</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td><a href="{{ route('student.edit', $student->id) }}"><button type="button">Edit</button>
    </a></td>
        

    
  
<td>
    <form action="{{ route('student.destroy', $student->id) }}"
          method="POST"
          style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"
                onclick="return confirm('Are you sure you want to delete?')">
            Delete
        </button>
    </form>
</td>


    </tr>
    @endforeach

</table>

</body>
</html>
