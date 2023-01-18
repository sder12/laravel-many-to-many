{{-- TECHNOLOGIES INDEX --}}
@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row mt-5">

            <div class="col-12">
                {{-- Back to All --}}
                <a href="{{ route('admin.technologies.index') }}" class="btn btn-dark">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                {{-- / Back to All --}}
            </div>

            <div class="col-12 text-center">
                <h2>Technology: {{ $technology->name }} </h2>
            </div>

        </div>
    </div>
@endsection
