@extends('admin.layouts.panel')

@section('head')
    <title>kerjajepang - Peraturan pages</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-12">
                <div class="d-block bg-white rounded shadow p-3">
                    <p class="fs-4 fw-bold mb-0">Pages Settings</p>
                </div>
            </div>
            <div class="col-12">
                <div class="d-block bg-white rounded shadow p-3">
                    <table class="table table-borderless">
                        <thead class="alert-primary ">
                            <tr>
                                <th>No</th>
                                <th>Pages Name</th>
                                {{-- <th>Created_at</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Home pages</td>
                                <td>
                                    <a href="{{ route('admin.pages.beranda') }}" class="btn btn-outline-primary btn-sm py-1">
                                        <i class="fas fa-edit fa-sm fa-fw"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection