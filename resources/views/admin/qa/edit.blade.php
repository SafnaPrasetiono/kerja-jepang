@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - edit question and answer</title>
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
            <p class="fs-4 fw-bold mb-0">Create Question and Answer</p>
        </div>
        <div class="d-block p-3">
            <form action="{{ route('admin.qa.update', ['id' => $data->id_qa]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="question" class="form-label">Pertanyaan</label>
                    <textarea name="question" id="question" rows="3"
                        class="form-control @error('question') is-invalid @enderror">{{ $data->question }}</textarea>
                    @error('question')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Jawaban</label>
                    <textarea name="answer" id="answer" rows="3"
                        class="form-control @error('answer') is-invalid @enderror">{{ $data->answer }}</textarea>
                    @error('answer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="about" class="form-label">Topik Pembahasan</label>
                    <input type="text" name="about" id="about" class="form-control" value="{{ $data->about }}">
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
    ClassicEditor.create(document.querySelector("#answer"))
    .then((newEditor) => {
        editor = newEditor;
    })
    .catch((error) => {
        console.error(error);
    });
</script>
@endsection