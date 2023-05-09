@extends('layout.app')

@section('content')

<div class="offset-3 card col-6">
    <div class="card-header">
        <h5 class="card-title mb-0"> Import CSV</h5>
    </div>
    <div class="container-fluid">
        <form class="form" action="{{ route('import') }}"
        method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3 mt-2">
                <label for="file" class="form-label">File</label>
                <input type="file" class="form-control" id="file" name="file" required
                    autofocus autocomplete="off">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <a href="{{ route('admin.index') }}" class="btn btn-secondary me-md-2">Back</a>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>



@endsection
