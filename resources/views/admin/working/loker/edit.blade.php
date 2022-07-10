@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - Edit lowongan kerja</title>
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
            <p class="fs-4 fw-bold mb-0">Edit Lowongan Kerja</p>
            <p class="mb-0 text-secondary">Halaman edit lowongan pekerjaan</p>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <div class="mb-3 text-center">
            <img src="{{ url('/images/loker/'. $data->images) }}" alt="" width="40%">
        </div>
        <form action="{{ route('admin.loker.update', ['id' => $data->id_lokers]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images"
                    class="form-control @error('images') is-invalid @enderror">
                @error('images')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title Jobs</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ $data->title }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="locations" class="form-label">Locations</label>
                <input type="text" name="locations" class="form-control @error('locations') is-invalid @enderror"
                    value="{{ $data->locations }}">
                @error('locations')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                    <label for="#" class="form-label">Date Start</label>
                    <input name="date_start" type="date"
                        class="form-control @error('date_start') is-invalid @enderror"
                        value="{{ $data->date_start }}">
                    @error('date_start')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="#" class="form-label">Date End</label>
                    <input name="date_end" type="date" class="form-control @error('date_end') is-invalid @enderror"
                        value="{{ $data->date_end }}">
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
                    class="form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Descirpiton Jobs</label>
                <textarea name="content" id="editors" rows="10"
                    class="form-control @error('content') is-invalid @enderror">{{ $data->content }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-warning form-control">Update</button>
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