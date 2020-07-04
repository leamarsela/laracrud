@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Question</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $question->judul }}</h6>
                <p class="card-text">{{ $question->isi }}</p>
                <a href="#" class="card-link">Edit</a>
                <a href="{{ url('/questions') }}" class="card-link">Back</a>
            </div>
        </div>
    </div><br>

    @foreach ($answers as $answer)        
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Answer: {{$loop->iteration}}/{{ $loop->count }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Question Number: {{ $answer->question_id }}</h6>
                    <p class="card-text">{{ $answer->isi }}</p>
                </div>
            </div>
        </div><br>
    @endforeach
    
@endsection
