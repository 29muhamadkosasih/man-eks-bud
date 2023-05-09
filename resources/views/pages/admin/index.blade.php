@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit User</h5>
                @else
                <h5 class="card-title mb-0">Create User</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.admin.edit')
                @else
                @include('pages.admin.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List User</h5>
            </div>
            <div class="mb-1 pe-4 d-flex justify-content-end">
                <a href="{{ route('/create.import') }}" class="btn btn-primary btn-sm">Import CSV</a>
            </div>
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th class="text-center" width="30">No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataadmin as $dataadmin)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dataadmin->name }}</td>
                        <td>{{ $dataadmin->username }}</td>
                        @switch($dataadmin)
                        @case($dataadmin->role == 'guru')
                        <td><span class="badge bg-success">Guru</span></td>
                        @break

                        @case($dataadmin->role == 'murid')
                        <td><span class="badge bg-secondary">Murid</span></td>
                        @break

                        @default
                        <td><span class="badge bg-warning">Admin</span></td>

                        @endswitch

                        <td>
                            <form method="POST" action="{{ route('admin.destroy', $dataadmin->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.edit', $dataadmin->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                buttons: true,
                dangerMode: true,

            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>

@endsection
