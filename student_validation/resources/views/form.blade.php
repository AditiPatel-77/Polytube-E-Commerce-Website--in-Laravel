<html>
<head>
    <title>File Upload</title>
</head>
<body>

<form method="POST" action="{{ route('forms.store') }}" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image" required><br><br>
    <button type="submit">Upload</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

</body>
</html>
