<form action="{{ route('admin.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="ex. John Doe" required autofocus
            autocomplete="off" value="{{ $edit->name }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="ex. johndoe" required
            autocomplete="off" value="{{ $edit->username }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $edit->password }}">
    </div>
    <div class="mb-3 mt-2">
        <label for="role" class="form-label">Role</label>
        <select class="form-select mb-3" name="role" required value="{{ $edit->role }}">
            <option selected>{{ $edit->role }}</option>
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="murid">Murid</option>
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a href="{{ route('admin.index') }}" class="btn btn-secondary me-md-">Cancel</a>
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>
