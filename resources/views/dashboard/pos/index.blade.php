@extends('layouts.dashboard')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<!-- summernote -->
<link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">

<!-- Select2 -->
<link rel="stylesheet" href="{{asset('public/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('content')
@include('dashboard.pos.components.create')
@endsection

@section('modal')
@include('dashboard.pos.components.modal')
@endsection


@push('javascript')
<!-- DataTables -->
<script src="public/plugins/datatables/jquery.dataTables.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Summernote -->
<script src="public/plugins/summernote/summernote-bs4.min.js"></script>

@endpush

@push('script')
@include('dashboard.pos.components.create_js')
@endpush
{{-- </html> --}}
