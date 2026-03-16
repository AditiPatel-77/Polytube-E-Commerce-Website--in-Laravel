
@extends('layout.master')

@section('content')
@foreach($forms as $form)
    <div>
        <img src="{{ asset('images/'.$form->path) }}" width="200">
    </div>
@endforeach
@endsection
