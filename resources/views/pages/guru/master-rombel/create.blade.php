<form action="{{ route('master-rombel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name Rombel</label>
        <input type="text" class="form-control" id="name_rombel" name="name_rombel" placeholder="ex. John Doe" required autofocus
            autocomplete="off">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
