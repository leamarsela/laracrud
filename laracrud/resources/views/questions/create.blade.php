@extends('layouts.master')

@section('content')

    <div class="container">
        <form action="/questions" method="post">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput2">Judul</label>
                <input type="text" class="form-control @error ('judul') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Judul" name="judul">
                <div class="invalid-feedback">Please input!!!</div>
                <label for="formGroupExampleInput2">Isi</label>
                <input type="text" class="form-control @error ('isi') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Isi" name="isi">
                <div class="invalid-feedback">Please input!!!</div>
                <input hidden type="text" id="user_id" name='user_id' value='1'><br>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ url('/questions') }}" class="btn btn-primary btn-xl active" role="button" aria-pressed="true">Back</a>
          </form>
    </div>

@endsection



