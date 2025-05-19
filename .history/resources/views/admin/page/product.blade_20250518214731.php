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
                        <td>No</td>
                        <td>Foto</td>
                        <td>Date in</td>
                        <td>Kode Product</td>
                        <td>Nama Product</td>
                        <td>Merk Product</td>
                        <td>Jenis Kelamin</td>
                        <td>Harga</td>
                        <td>Deskripsi</td>
                        <td>Warna</td>
                        <td>Jenis Pakaian</td>
                        <td>Stock</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $y => $x)
                        @if (!$data)
                            <td colspan="9"></td>
                        @else
        
                    <tr class="align-middle">
                        <td>{{ ++$y }}</td>
                        <td>
                            <img src="{{ asset('storage/product/' . $x->foto) }}" style="width:100px;">
                        </td>
                        <td>{{ $x->created_at }}</td>
                        <td>{{ $x->product_id }}</td>
                        <td>{{ $x->product_name }}</td>
                        <td>{{ $x->product_brand }}</td>
                        <td>{{ $x->gender}}</td>
                        <td>{{ $x->price }}</td>
                        <td>{{ $x->description }}</td>
                        <td>{{ $x->primary_color}}</td>
                        <td>{{ $x->jenis_pakaian}}</td>
                        <td>{{ $x->quantity }}</td>
                        <td>
                            <input type="hidden" id="sku" value="{{ $x->product_id }}">
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });

        $('#addData').click(function (e) {

            $.ajax({
                url: "{{route('addModal')}}",
                success: function (response) {
                    $('.tampilData').html(response).show();
                    $('#addModal').modal("show");
                }
            })
        });

        $('.editModal').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type:"GET",
                url: "{{route('editModal',['id'=>':id'])}}".replace(':id',id),
                success: function(response){
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal("show");
                }
            });
        });

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $('.deleteData').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{route('deleteData',['id'=>':id'])}}".replace(':id',id),
                        success: function(response){
                            location.reload();
                        }

                    })
                }
            })
        });

    </script>
@endsection
