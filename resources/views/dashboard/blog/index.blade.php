@extends('layouts.dashboardmaster')


@section('title')

   Blog

@endsection


@section('content')

<x-breadcum emon="Blog's Show Page"></x-breadcum>

@endsection



@section('script')

@if (session('success'))

<script>
   Toastify({
  text: "{{ session('success') }}",
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
