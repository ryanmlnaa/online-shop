<nav class="mb-3 d-flex justify-content-lg-between bg-white w-100 p-2 rounded">
    <div class="d-flex flex-column">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active"><a href="#">{{$name}}</a></li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Library</li>--}}
        </ol>
        <span>{{$name}}</span>

        <a href="{{ route('checkout') }}" class="btn btn-outline-light">
    <i class="fas fa-shopping-cart"></i> Keranjang
</a>


    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="icon-notif">
            <span class="material-icons">
                notifications
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <img src="{{ asset('storage/user/' . Auth::user()->foto) }}"class="rounded-circle"style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;"alt="User Photo">
            <div class="d-flex flex-column">
                <p class="m-0" style="font-weight: 700; font-size:14px;">{{Auth::user()->name}}</p>
                <p class="m-0" style="font-size:12px">{{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
</nav>
