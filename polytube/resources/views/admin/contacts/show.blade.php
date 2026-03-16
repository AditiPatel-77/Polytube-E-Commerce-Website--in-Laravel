@extends('admin.layouts.master')

@section('content')

<div class="container">
    <h2>Contact Details</h2>

    <div class="card mt-4">
        <div class="card-body">

            <h5><strong>Name:</strong> {{ $contact->name }}</h5>
            <h5><strong>Email:</strong> {{ $contact->email }}</h5>
            <h5><strong>Subject:</strong> {{ $contact->subject ?? 'N/A' }}</h5>

            <hr>

            <h5><strong>Message:</strong></h5>
            <p>{{ $contact->message }}</p>

            <hr>

            <a href="{{ route('admin.contacts.index') }}" 
               class="btn btn-secondary">
                Back
            </a>

        </div>
    </div>
</div>

@endsection