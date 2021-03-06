@extends('layouts.frontend.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">


    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('public/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('hero-section')

@endsection

@section('main-content')

    <!-- ======= Why Us Section ======= -->
    {{--    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">--}}
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                @include('dashboard.pos.components.create')
            </div>

        </div>
    </section><!-- End Why Us Section -->

@endsection

@section('modal')
    @include('dashboard.pos.components.modal')
@endsection

@push('javascript')
    <!-- DataTables -->
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- Select2 -->
    <script src="{{asset('public/plugins/select2/js/select2.full.min.js')}}"></script>

    <!-- Axios -->
    <script src="{{asset('public/plugins/axios/axios.min.js')}}"></script>


@endpush


@push('script')
    @include('dashboard.pos.components.create_js')
@endpush
