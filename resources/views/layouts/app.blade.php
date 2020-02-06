@extends('sb-admin-2::layouts.main')
<script src="{{ asset('js/app.js') }}"></script>
@section('sidebar-menu')
@include('sweet::alert')
<ul class="nav" id="side-menu">
  <li>
    <a href="{{ route('home') }}" class="active"><i class="fa fa-home fa-fw"></i> Home</a>
  </li>
  <li>
    <a href="{{ route('admin.images') }}" class="active"><i class="fa fa-picture-o fa-fw"></i> Images</a>
  </li>
</ul>
@endsection
