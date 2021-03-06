@extends('layouts.dashboard')

@section('css')

@endsection

@section('content')

@include('dashboard.prescription-order.components.create')
@endsection

@section('modal')
@include('dashboard.prescription-order.components.modal')
@endsection


@push('javascript')


@endpush

@push('script')
@include('dashboard.prescription-order.components.create_js')
@endpush
{{-- </html> --}}
