<form action="{{ route('master-rayonnn.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-2">
        <label for="rayon" class="form-label">Rayon</label>
        <input type="text" class="form-control" id="rayon"  name="name_rayon" placeholder="ex. John Doe" required autofocus
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="pembimbing" class="form-label">Pembimbing</label>
        <input type="text" class="form-control" id="pembimbing" name="pembimbing" placeholder="ex. johndoe" required
            autocomplete="off">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        {{-- <button class="btn btn-primary me-md-2" type="button">Button</button> --}}
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
