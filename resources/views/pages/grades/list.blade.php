@extends('app')
@section('content')
<div x-data="{
    item: null,
    showModal: false,
    openDeleteModel(id) {

        this.showModal = true;
        $refs.deleteModal.trigger('focus')
        this.item = id;

    }
}">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> @lang('admin.dashboard')</h4>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped p-1">
                            <thead>
                                <tr>
                                    <th>@lang('admin.id')</th>
                                    <th>@lang('admin.stage')</th>
                                    <th>@lang('admin.notes')</th>
                                    <th>@lang('admin.actions.title')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grades as $grade)
                                <tr>
                                    <th>{{$grade->id}}</th>
                                    <th>{{$grade->name}}</th>
                                    <th>{{$grade->notes}}</th>
                                    <th>
                                        <a class="btn btn-info"
                                            href="{{ route('grades.edit', ['grade' => $grade->id]) }}">
                                            <i class="fa fa-edit"></i> @lang('admin.actions.edit')</a>
                                        <form class="d-inline-block"
                                            action="{{route('grades.destroy', ['grade' => $grade->id])}}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-white">
                                                <i class="fa fa-trash"></i>
                                                @lang('admin.actions.delete')</button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" x-ref="deleteModal" id="delete" tabindex="-1" role="dialog" aria-hidden="true"
        aria-labelledby="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-4">
                    <h3>
                        @lang('admin.are_you_sure_to_delete')
                    </h3>
                    <div class="my-5"></div>
                    <button class="btn btn-success">
                        @lang('admin.actions.yes')
                    </button>
                    <button class="btn btn-outline-danger">
                        @lang('admin.actions.no')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
