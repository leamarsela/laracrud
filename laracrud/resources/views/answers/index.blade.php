@extends('layouts.master')

@section('content')

    @foreach ($answers as $answer)        
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Answer: {{$loop->iteration}}/{{ $loop->count }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Question Number: {{ $answer->question_id }}</h6>
                    <p class="card-text">{{ $answer->isi }}</p>
                    <a href="{{ $answer->id }}/edit" class="card-link">Edit</a>
                    <form action="{{ $answer->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ url('/questions') }}" class="card-link">Back</a>
                </div>
            </div>
        </div><br>
    @endforeach
    
@endsection
