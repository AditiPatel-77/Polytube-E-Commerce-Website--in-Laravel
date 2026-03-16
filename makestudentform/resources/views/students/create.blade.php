@extends('layouts.master')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Student Registration</h4>
</div>

<div class="card-body">
    <form method="Post" action="{{ route('student.store')}}" enctype="multipart/form-data">
        @csrf 

          <!-- Name -->
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
                @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control">
                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label>Gender</label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                @error('gender') <br> 
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Course -->
            <div class="mb-3">
                <label>Course</label>
                <select name="course" class="form-control">
                    <option value="">--Select Course</option>
                    <option value="PHP">PHP</option>
                    <option value="Laravel">Laravel</option>
                    <option value="React">React</option>
                </select>
                @error('course') <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label>Address</label>
                <textarea name="address" class="form-control">
                </textarea>
                @error('address') <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Hobbies -->
            <div class="mb-3">
                <label>Hobbies</label><br>
                <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                <input type="checkbox" name="hobbies[]" value="Music"> Music
                <input type="checkbox" name="hobbies[]" value="Sports"> Sports

                @error('hobbies') <br><small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label>Student Image</label>
                <input type="file" name="image" class="form-control">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Submit -->
            <div class="mb-3">
                <button class="btn btn-success">Register</button>
            </div>

            </form>
    </div>
</div>

@endsection
