<form action="{{ route('ekstrakurikuler.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-2">
        <label for="nis" class="form-label">Nis</label>
        <input type="number" class="form-control" id="nis" name="nis" placeholder="ex. 12098768" required autofocus
            autocomplete="off" value="{{ $edit->nis }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="ex. johndoe" required autofocus
            autocomplete="off" value="{{ $edit->name }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="rombel_id" class="form-label">Rombel</label>
        <select class="form-select mb-3" name="rombel_id" required>
            <option selected>{{ $edit->rombel_id }}</option>
            @foreach ($rombel as $key =>$value )
            <option value="{{ $value->id }}">{{ $value->name_rombel }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-2">
        <label for="rayon_id" class="form-label">Rayon</label>
        <select class="form-select mb-3" name="rayon_id" required>
            <option selected>{{ $edit->rayon_id }}</option>
            @foreach ($rayon as $key =>$value )
            <option value="{{ $value->id }}">{{ $value->name_rayon }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-2">
        <label for="ekskul_id" class="form-label">Ekstrakurikuler</label>
        <select class="form-select mb-3" name="ekskul_id" required>
            <option selected>{{ $edit->ekskul_id }}</option>
            @foreach ($ekskul as $key =>$value )
            <option value="{{ $value->id }}">{{ $value->name_ekskul }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-2">
        <label for="alasan" class="form-label">Alasan</label>
        <textarea class="form-control" id="alasan" name="alasan" placeholder="name@example.com" required
        autocomplete="off">{{ $edit->alasan }}
        </textarea>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
