<form action="{{ route('master-rayonnn.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name Rayon</label>
        <input type="text" class="form-control" id="name_rayon" name="name_rayon" placeholder="ex. John Doe" required autofocus
            autocomplete="off" value="{{ $edit->name_rayon }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="username" class="form-label">Pembimbing</label>
        <input type="text" class="form-control" id="pembimbing" name="pembimbing" placeholder="ex. johndoe" required
            autocomplete="off" value="{{ $edit->pembimbing }}">
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a href="{{ route('master-rayonnn.index') }}" class="btn btn-secondary me-md-">Cancel</a>
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>
