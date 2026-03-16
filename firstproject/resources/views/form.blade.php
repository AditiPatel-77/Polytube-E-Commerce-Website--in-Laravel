<html>
    <head>
        <title>File Upload </title>
</head>
<body>
    <form method="Post" action="{{route('forms.store')}}">
        @csrf 
        <div>
            <label for="Name">Name</lable>
            <input type="text" name="username"></div><br/>
            <div>
                <button type="submit">Submit</button></div>
</form>
</body>