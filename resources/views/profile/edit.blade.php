@extends('admin.layouts.dashboardLayout')
@section('content')

<div class="container">
    <h2 class="fs-1 text-uppercase text-first text-center my-5 pb-3">
        {{ __('Profilo') }}
    </h2>
    <div class="card p-4 mb-5 bg-white shadow-sm rounded-lg border-0">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-5 bg-white shadow-sm rounded-lg border-0">


        @include('profile.partials.update-password-form')

    </div>
{{-- 
    <div class="card p-4 mb-5 bg-white shadow-sm rounded-lg border-0">


        @include('profile.partials.delete-user-form')

    </div> --}}
</div>

@endsection
