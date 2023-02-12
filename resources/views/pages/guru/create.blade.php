<form action="">
    <div class="mb-3 mt-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="ex. John Doe" required autofocus
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="ex. johndoe" required
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" required
            autocomplete="off">
    </div>
    <div class="mb-3 mt-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password">
    </div>
    <div class="mb-3 mt-2">
        <label for="role" class="form-label">Role</label>
        <select class="form-select mb-3" required>
            <option selected>Open this select role</option>
            <option>Admin</option>
            <option>Guru</option>
            <option>Murid</option>
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        {{-- <button class="btn btn-primary me-md-2" type="button">Button</button> --}}
        <button class="btn btn-primary" type="button">Save</button>
    </div>
</form>
