@extends('layouts.app')
@section('content')

<div class="container">
    <form method="post" action="/patients/ailments">
        {{ csrf_field() }}
        <input type="hidden" value="{{ $patient->id }}" name="id">
        @foreach ($ailments as $ailment)
            <div class="form-group">
                <label for="ailments">{{ $ailment->name }}</label>
                <input type="checkbox" name="ailments[]" value="{{ $ailment->id }}" {{ $patient->ailments->contains($ailment->id) ? ' checked' : '' }}>
            </div>
        @endforeach
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update ailments</button>
        </div>
    </form>
</div>
@endsection