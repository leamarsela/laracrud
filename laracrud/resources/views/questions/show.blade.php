@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Question</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $question->judul }}</h6>
                <p class="card-text">{{ $question->isi }}</p>
                <a href="{{ $question->id }}/edit" class="card-link">Edit</a>
                <form action="{{ $question->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ url('/questions') }}" class="card-link">Back</a>
            </div>
        </div>
    </div>

@endsection