@extends('app')
@section('content')
<div>
    <div class="my-5"></div>
    <h2 class="my-4 text-xl font-bold"> @lang('admin.edit_grade') </h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="p-4">
                <div class="my-5"></div>
                <form action="{{ route('grades.update', ['grade' => $grade->id]) }}" method="POST" class="form-group">
                    @csrf
                    @method('PATCH')
                    <div class="my-4">
                        <label for="name-ar">
                            @lang('admin.grades.create.arabic_name')
                        </label>
                        <input type="text" id="name-ar" class="form-control" name="name[ar]"
                            value="{{ $grade->getTranslation('name', 'ar') }}">
                        @error('name.ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="name-en">
                            @lang('admin.grades.create.english_name')
                        </label>
                        <input type="text" id="name-en" class="form-control" name="name[en]"
                            value="{{ $grade->getTranslation('name', 'en') }}">
                        @error("name.en")
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="notes-ar">
                            @lang('admin.grades.create.notes_in_arabic')
                        </label>
                        <textarea id="notes-ar" name="notes[ar]" class="form-control">{{ $grade->getTranslation('notes', 'ar') }}</textarea>
                        @error('notes.ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="notes-en">
                            @lang('admin.grades.create.note_in_english')
                        </label>
                        <textarea id="notes-en" name="notes[en]" class="form-control">{{ $grade->getTranslation('notes', 'en')  }}</textarea>
                        @error('notes.en')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">
                        @lang('admin.actions.save')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
