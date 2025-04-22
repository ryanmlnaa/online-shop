@extends('admin.layout.index')

@section('content')
<div class="card mb-1">
        <div class="card-body d-flex flex-row justify-content-between">
            <div class="filter d-flex flex-lg-row gap-3">
                <input type="date" class="form-control" name="tgl_awal">
                <input type="date" class="form-control" name="tgl_akhir">
                <button class="btn btn-primary">Filter</button>
            </div>
            <input type="text" class="form-control w-25" placeholder="Search....">
        </div>
    </div>
    <div class="card rounded-full">
        <div class="card-header bg-transparent">
            <button class="btn btn-info" id="addData">
                <i class="fas fa-plus">
                    <span>Tambah Product</span>
                </i>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Join Date</th>
                        <th>Nama Karyawan</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $y => $x)
                    <tr class="align-middle">
                        <td>{{ ++$y }}</td>
                        <td>
                            <img src="{{ asset('storage/user/' . $x->foto) }}" style="width:100px;">
                        </td>
                        <td>{{ $x->nik }}</td>
                        <td>{{ $x->created_at }}</td>
                        <td>{{ $x->name }}</td>
                        <td>
                            <span class='badge text-bg-{{ $x->role === 1 ? 'info' : 'success' }}'>{{ $x->role === 1 ? 'Admin' : 'Manager' }}</span>
                        </td>
                        <td>
                            <span class="badge text-bg-{{ $x->is_active == 1 ? 'success' : 'danger' }}">{{ $x->is_active == 1 ? 'Active' : 'Not Active' }}</span>
                        </td>
                        <td>
                            <button class="btn btn-info editModal" data-id="{{ $x->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger deleteData" data-id="{{ $x->id }}" data-id="{{$x->id}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination d-flex flex-row justify-content-between">
                <div class="showData">
                    Data ditampilkan {{$data->count()}} dari {{$data->total()}}
                </div>
                <div>
                {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="tampilData" style="display: none;"></div>
    <div class="tampilEditData" style="display: none;"></div>

    <script>
        $('#addData').click(function (e) {
            
            $.ajax({
                url: "{{route('addModalUser')}}",
                success: function (response) {
                    $('.tampilData').html(response).show();
                    $('#userTambah').modal("show");
                }
            })
        });
    </script>
@endsection