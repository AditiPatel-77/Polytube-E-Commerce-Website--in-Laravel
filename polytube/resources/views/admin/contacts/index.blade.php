@extends('admin.layouts.master')

@section('content')

<div class="container">
    <h2>Contact Messages</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                        <!-- <td>@if($contact->status == 0)
                            <span class="badge bg-danger">Unread</span>
                        @else
                            <span class="badge bg-success">Read</span>
                        @endif
                    </td> -->
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact->id) }}"
                           class="btn btn-sm btn-primary">View</a>

                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection