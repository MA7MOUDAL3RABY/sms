@extends('app')
@section('content')
<div>
    <div class="my-5"></div>
    <h2 class="my-4 text-xl font-bold"> Edit </h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="p-4">
                <div class="my-5"></div>
                <form action="{{ route('classrooms.update', ['classroom' => $classroom->id]) }}" method="POST"
                    class="form-group">
                    @csrf
                    @method('PATCH')
                    <div class="my-4">
                        <label for="name-ar">
                            @lang('admin.grades.create.arabic_name')
                        </label>
                        <input type="text" id="name-ar" class="form-control" name="name[ar]"
                            value="{{ $classroom->getTranslation('name', 'ar') }}">
                        @error('name.ar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="name-en">
                            @lang('admin.grades.create.english_name')
                        </label>
                        <input type="text" id="name-en" class="form-control" name="name[en]"
                            value="{{ $classroom->getTranslation('name', 'en') }}">
                        @error("name.en")
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4"></div>
                    <div class="col-lg-2 p-0">
                        <div class="box">
                            <select name="grade" class="form-control p-0">
                                <option class="p-3" value="">
                                    Select
                                </option>
                                @foreach ($grades as $grade)
                                <option {{$grade->id == $classroom->grade->id ? 'selected' : ''}} class="p-3" value="{{$grade->id}}">{{$grade->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('grade')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="my-4"></div>

                    <button type="submit" class="btn btn-success">
                        @lang('admin.actions.save')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
