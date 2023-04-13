@extends('app')
@section('content')
<div>
    <div class="my-5"></div>
    <h2 class="my-4 text-xl font-bold"> @lang('admin.add_a_new_classroom') </h2>
    <div>
        <div class="my-5"></div>
        <form action="{{ route('grades.store') }}" method="POST" class="form-group">
            @csrf
            <!-- main body -->
            <div>
                <div class="col-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="repeater">
                                <div data-repeater-list="classrooms">
                                    <div class="row my-3" data-repeater-item>
                                        <form>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="text"
                                                    placeholder="{{trans('admin.grades.create.arabic_name')}}" />
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="form-control" type="text"
                                                    placeholder="{{trans('admin.grades.create.english_name')}}" />
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="box">
                                                    <select name="grade" class="form-control p-0">
                                                        @foreach ($grades as $grade)
                                                        <option class="p-3" value="{{$grade->id}}">{{$grade->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="btn btn-danger btn-block" data-repeater-delete
                                                    type="button" value="{{trans('admin.actions.delete')}}" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-12">
                                        <input class="button" data-repeater-create type="button" value="{{trans('admin.actions.addition')}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                @lang('admin.actions.save')
            </button>
        </form>
    </div>
    @endsection
