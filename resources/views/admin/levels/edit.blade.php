
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Level</h1>

    <form action="{{ route('admin.levels.update', $level->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Level Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $level->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.levels.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

