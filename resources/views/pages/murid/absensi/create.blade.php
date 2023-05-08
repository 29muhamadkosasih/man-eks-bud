<form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Ekstrakurikuler</label>
        <select class="form-select mb-3" name="nis_id" required>
            <option selected>--- PILIH Ekstrakurikuler ---</option>
            @foreach ($ekskul as $key =>$value )
            <option value="{{ $value->id }}">{{ $value->ekskul->name_ekskul  }}</option>
            @endforeach
        {{-- </select>
        <input type="number" class="form-control" placeholder="{{ $ekskul }}" required
        autocomplete="off" readonly>
        </select> --}}
        {{-- <input type="hidden" name="nis_id" value="{{ $id }} "> --}}
        <input type="hidden" name="nilai" value="0">
        <input type="hidden" name="name" value="{{ $name }}">

    </div>
    <input type="hidden" name="status" value="hadir">
    <input type="hidden" name="time" value="{{ Carbon\Carbon::now()->format('H:i:s') }}" />
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <button class="btn btn-primary" type="submit">Klik To Absen</button>
    </div>
</form>
