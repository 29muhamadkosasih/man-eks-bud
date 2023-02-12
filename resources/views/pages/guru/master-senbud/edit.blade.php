<form action="{{ route('master-senbud.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-2">
        <label for="name_senbud" class="form-label">Name Seni Budaya</label>
        <input type="text" class="form-control" id="name_senbud" name="name_senbud" placeholder="ex. John Doe" required autofocus
            autocomplete="off" value="{{ $edit->name_senbud }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="username" class="form-label">Kouta</label>
        <input type="number" class="form-control" id="username" name="kouta" placeholder="ex. johndoe" required
            autocomplete="off" value="{{ $edit->kouta }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="day" class="form-label">Day</label>
        <select class="form-select mb-3" name="day" required>
            <option selected>{{ $edit->day }}</option>
            <option value="senin">Senin</option>
            <option value="selasa">Selasa</option>
            <option value="rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
            <option value="minggu">Minggu</option>
        </select>
    </div>

    <div class="mb-3 mt-2">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" id="time" name="time" placeholder="name@example.com" required
            autocomplete="off" value="{{ $edit->time }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="desc" class="form-label">Desc</label>
        <textarea type="text" class="form-control" id="desc" name="desc" placeholder="name@example.com" required
        autocomplete="off"> {{ $edit->desc }}
        </textarea>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
