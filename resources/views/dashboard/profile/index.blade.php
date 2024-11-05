@extends('layouts.dashboardmaster')

@section('content')

{{-- name session start --}}
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Username</h4>
                <form action="{{ route('profile.username') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input style="border: 2px solid rgb(50, 107, 160)" name="name" type="text" class="form-control" id="inputEmail4" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
{{-- email session start  --}}
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Email Address</h4>
                    <form action="{{ route('profile.email') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-2 col-md-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input style="border: 2px solid rgb(50, 107, 160)" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email Address">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>

    </div>

    {{-- passsword session start --}}
    <div class="col-xl-6">
         <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Password</h4>
                <form action="{{ route('profile.password') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Current Password</label>
                            <input style="border: 2px solid rgb(50, 107, 160)"  name="c_password" type="password" class="form-control @error('c_password') is-invalid @enderror" id="inputEmail4" placeholder="Email Address">
                            @error('c_password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input style="border: 2px solid rgb(49, 112, 155)" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail4" placeholder="New password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Password Confirmation</label>
                            <input style="border: 2px solid rgb(49, 110, 138)" name="password_confirmation" type="password" class="form-control" id="inputEmail4" placeholder="Comfirm Password">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>

    </div>


    {{-- image sesion start --}}
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Profile Image</h4>
                <form action="{{ route('profile.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Image</label>
                            <input style="border: 2px solid rgb(50, 107, 160)" name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="inputEmail4" placeholder="Image">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('script')

@if (session('name_update'))

<script>
   Toastify({
  text: "{{ session('name_update') }}",
  duration: 3000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>

@endif

@if (session('email_update'))

<script>
   Toastify({
  text: "{{ session('email_update') }}",
  duration: 3000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>

@endif


@if (session('password_update'))

<script>
   Toastify({
  text: "{{ session('password_update') }}",
  duration: 3000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>

@endif


@if (session('cat_success'))

<script>
   Toastify({
  text: "{{ session('cat_success') }}",
  duration: 3000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>

@endif

@endsection

