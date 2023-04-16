@extends('app')
@section('content')
<div>
    <div class="my-5"></div>
    <h2 class="my-4 text-xl font-bold"> @lang('admin.add_a_new_classroom') </h2>
    <div>
        <div class="my-5"></div>
        <form id="classroom-create" action="{{ route('classrooms.store') }}" method="POST" class="form-group">
            @csrf
            <!-- main body -->
            <div>
                <div class="col-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div>
                                <div>
                                    <div class="row my-3">
                                        <div class="col-lg-2">
                                            <input class="form-control" type="text" name="name[ar]"
                                                value="{{ old('ar') }}"
                                                placeholder="{{trans('admin.grades.create.arabic_name')}}" />
                                            @error('name.ar')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="text" name="name[en]"
                                                value="{{ old('en') }}"
                                                placeholder="{{trans('admin.grades.create.english_name')}}" />
                                            @error('name.en')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="box">
                                                <select name="grade" class="form-control p-0">
                                                    <option class="p-3" value="">
                                                        Select
                                                    </option>
                                                    @foreach ($grades as $grade)
                                                    <option class="p-3" value="{{$grade->id}}">{{$grade->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('grade')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button form="classroom-create" type="submit" class="btn btn-success">
                @lang('admin.actions.save')
            </button>
        </form>
    </div>
    @endsection
