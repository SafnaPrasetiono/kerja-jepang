@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - admin profile</title>
@endsection

@section('pages')
<div class="mb-3">
    @livewire('admin.profile.data')
</div>
<div class="mb-3">
    @livewire('admin.profile.password')
</div>
@endsection

@section('script')

@endsection