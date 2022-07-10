@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - Tambah perusahaan</title>
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
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Add News pages</p>
        </div>
        <div class="d-block p-3">
            <form action="{{ route('admin.news.create.store') }}" method="post" enctype="multipart/form-data">
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
                    <label for="title" class="form-label">Departemen</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-12 col-md-6">
                        <label for="#" class="form-label">Jumlah Pegawai</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#" class="form-label">Bidang Industri</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#" class="form-label">Lokasi</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#" class="form-label"></label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="editors" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-secondary form-control">Save</button>
                </div>
            </form>
        </div>
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