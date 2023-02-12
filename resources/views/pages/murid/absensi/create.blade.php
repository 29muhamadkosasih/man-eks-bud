<form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">NIS</label>
        <select class="form-select mb-3" name="nis_id" required>
            <option selected>--- PILIH NIS ---</option>
            @foreach ($ekskul as $key =>$value )
            <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
        </select>
        <input type="hidden" name="nilai" value="0">

    </div>
    <input type="hidden" name="status" value="hadir">
    <input type="hidden" name="time" value="{{ Carbon\Carbon::now()->format('H:i:s') }}" />
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <button class="btn btn-primary" type="submit">Klik To Absen</button>
    </div>
</form>
