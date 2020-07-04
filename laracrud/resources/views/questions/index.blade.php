@extends('layouts.master')

@section('content')
    <h2>List Questions and Answers</h2>
    <div class="container">
        <a href="{{ url('/questions/create') }}" class="btn btn-danger mb-2 btn-lg active" role="button" aria-pressed="true">Add New Question</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Question</th>
                    <th scope="col">Edit Question</th>
                    <th scope="col">Detail Answer</th>
                    <th scope="col">Input Answer</th>
                    <th scope="col">Detail QnA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)  
                
                <tr>
                    <th scope="row">{{$loop->iteration}}.</th>
                    <td> {{$question->judul}} </td>
                    <td><a href="{{ url('/questions/' . $question->id ) }}" class="btn btn-primary mb-2 btn-xl active" role="button" aria-pressed="true">Edit Question</a></td>
                    {{-- <td><button type="submit" class="btn btn-primary mb-2">Edit Question</button></td> --}}
                    <td><a href="{{ url('/answers/' . $question->id ) }}" class="btn btn-success mb-2 btn-xl active" role="button" aria-pressed="true">Detail Answer</a></td>
                    <td>
                        <form class="form-inline" action="{{ url('/answers/' . $question->id) }}" method="POST">
                            @csrf
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control @error ('isi') is-invalid @enderror" placeholder="Answer" name="isi">
                                <div class="invalid-feedback">Please input</div>
                                <input hidden type="text" name="question_id" value="{{ $question->id }}">
                                <input hidden type="text" name="is_selected" value="0">
                            </div>                            
                            <button type="submit" class="btn btn-secondary mb-2">Input Answer</button>
                        </form>
                    </td>
                    <td><a href="{{ url('/answers/qna/'. $question->id ) }}" class="btn btn-info btn-xl active" role="button" aria-pressed="true">QnA</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

@endsection

