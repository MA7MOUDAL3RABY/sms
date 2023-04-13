@extends('app')
@section('content')
<div>
    <div class="my-5"></div>
    <h2 class="text-lg"> @lang('admin.new_grade') </h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="p-4">

                <div class="my-5"></div>

                <form action="{{ route('grades.store') }}" method="POST" class="form-group">
                    @csrf
                    <div class="my-4">
                        <label for="name-ar">
                            @lang('admin.grades.create.arabic_name')
                        </label>
                        <input type="text" id="name-ar" class="form-control" name="name[ar]" value="{{ old('name.ar') }}">
                        @error('name.ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="name-en">
                            @lang('admin.grades.create.english_name')
                        </label>
                        <input type="text" id="name-en" class="form-control"  name="name[en]" value="{{ old('name.en') }}">
                        @error("name.en")
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="notes-ar">
                            @lang('admin.grades.create.notes_in_arabic')
                        </label>
                        <textarea id="notes-ar" name="notes[ar]" class="form-control"
                            value="{{old('notes[ar]')}}"></textarea>
                        @error('notes.ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="notes-en">
                            @lang('admin.grades.create.note_in_english')
                        </label>
                        <textarea id="notes-en" name="notes[en]" class="form-control"
                            value="{{old('notes[en]')}}"></textarea>
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
