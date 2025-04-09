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
                        <td>SKU</td>
                        <td>Product Name</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Stock</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $y => $x)
                    <tr class="align-middle">
                        <td>{{ ++$y }}</td>
                          <td>
                            <img src="{{ asset('storage/product/' . $x->foto) }}" style="width:100px;">
                        </td>
                        <td>{{ $x->created_at }}</td>
                        <td>{{ $x->sku }}</td>
                        <td>{{ $x->nama_product }}</td>
                        <td>{{ $x->type . ' ' . $x->kategory }}</td>
                        <td>{{ $x->harga }}</td>
                        <td>{{ $x->quantity }}</td>
                        <td>
                            <input type="hidden" id="sku" value="{{ $x->sku }}">
                            <button class="btn btn-info editModal" data-id="{{ $x->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger deleteData" data-id="{{ $x->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="tampilData" style="display: none;"></div>

    <script>
        $('#addData').click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('addModal')}}",
                success: function (response) {
                    $('.tampilData').html(response).show();
                    $('#addModal').modal("show");
                }
            })
        });
    </script>
@endsection
