<form action="{{ route('master-rombel.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name Rombel</label>
        <input type="text" class="form-control" id="name_rombel" name="name_rombel" placeholder="ex. John Doe" required autofocus
            autocomplete="off" value="{{ $edit->name_rombel }}">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a href="{{ route('master-rombel.index') }}" class="btn btn-secondary me-md-">Cancel</a>
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>
