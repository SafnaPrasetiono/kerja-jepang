@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - buat lowongan kerja</title>
<style>
    .ck-editor__editable {
        min-height: 200px;
        box-shadow: unset !important;
        border-radius: 0px 0px 4px 4px !important;
    }
</style>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Tambah Lowongan Kerja</p>
        <p class="mb-0 text-secondary">Halaman tambah data baru lowongan kerja</p>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <form action="{{ route('admin.loker.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control @error('images') is-invalid @enderror">
                @error('images')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title Jobs</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="locations" class="form-label">location Jobs</label>
                <input type="text" name="locations" class="form-control @error('locations') is-invalid @enderror"
                    value="{{ old('locations') }}">
                @error('locations')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                    <label for="#" class="form-label">Date Start</label>
                    <input name="date_start" type="date" class="form-control @error('date_start') is-invalid @enderror"
                        value="{{ old('date_start') }}">
                    @error('date_start')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="#" class="form-label">Date End</label>
                    <input name="date_end" type="date" class="form-control @error('date_end') is-invalid @enderror"
                        value="{{ old('date_end') }}">
                    @error('date_end')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Small Descirpiton</label>
                <textarea name="description" rows="3"
                    class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Descirpiton Jobs</label>
                <textarea name="content" id="editors" rows="10"
                    class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-custom-1 form-control">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{ url('/dist/ckeditor5/ckeditor.js') }}"></script>
<script>
    ClassicEditor.create(document.querySelector("#editors"))
    .then((newEditor) => {
        editor = newEditor;
    })
    .catch((error) => {
        console.error(error);
    });

</script>
@endsection