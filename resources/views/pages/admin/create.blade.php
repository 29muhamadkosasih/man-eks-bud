<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="ex. John Doe" required autofocus
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="ex. johndoe" required
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
    </div>
    <div class="mb-3 mt-2">
        <label for="role" class="form-label">Role</label>
        <select class="form-select mb-3" name="role" required>
            <option selected>Open this select role</option>
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="murid">Murid</option>
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        {{-- <button class="btn btn-primary me-md-2" type="button">Button</button> --}}
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
