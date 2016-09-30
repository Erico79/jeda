@extends('layouts.dt')
@section('title', 'Subject')
@section('widget-title', 'Manage Subject')
@section('widget-desc', 'Add/ Edit/ Delete Subject')
@section('dt-title', 'Subject')
@section('sparks')
    <a href="" data-toggle="modal" data-target="#remoteModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
        <i class="fa fa-circle-arrow-up fa-lg"></i>
        Add subject
    </a>
@endsection
@push('js')
    <script src="{{ URL::asset('js/subjects.js') }}"></script>
@endpush
@section('content')
    {{--contains the grid--}}
    {{-- show success message if any--}}
    @include('layouts.includes._messages')
    <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Subject Status</th>
            <th>Subject mandatory</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @if(count($subjects))
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->subject_name }}</td>
                        <td>{{ $subject->subject_code }}</td>
                        <td>{{ $subject->subject_status }}</td>
                        <td>{{($subject->mandatory) ? 'Yes' : 'No' }}</td>
                        <td><button class="btn btn-warning btn-xs edit-subject"><i class="fa fa-edit"></i> Edit</button> </td>
                        <td><button class="btn btn-danger btn-xs delete-subject" delete-id="{{ $subject->id }}"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

@section('modal')
    {{--many modal as possible--}}
    <!-- MODAL PLACE HOLDER -->
    {{--modal for add--}}
    <div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Add subject </h4>
                </div>
                <div class="modal-body no-padding">

                    <form action="{{ url('add-subject') }}" method="post" class="smart-form">
                        {{ csrf_field() }}
                        <fieldset>
                            <section>
                                <div class="row">
                                    <label class="label col col-2">name</label>
                                    <div class="col col-10">
                                        <label class="input"> </i>
                                            <input type="text" name="subject_name">
                                        </label>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <label class="label col col-2">code</label>
                                    <div class="col col-10">
                                        <label class="input"></i>
                                            <input type="text" name="subject_code">
                                        </label>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <label class="label col col-2">mandatory</label>
                                        <div class="col col-2"></div>
                                        <div class="col col-10">
                                            <label class="checkbox">
                                                <input type="checkbox" name="subject_mandatory" checked="">
                                                <i></i></label>
                                        </div>
                                </div>
                            </section>

                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                               save
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>

                        </footer>
                    </form>


                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    {{--modal for edit--}}
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Edit contact type </h4>
                </div>
                <div class="modal-body no-padding">
                    {!! Form::open(array('route'=>'contact_types.store', 'class'=>'smart-form')) !!}
                    <fieldset>
                        <section>
                            <div class="row">
                                {{ Form::label('contact_type_name','Type',array('class'=>"label col col-2")) }}
                                <div class="col col-10">
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        {{ Form::text('contact_type_name',null,array( )) }}
                                    </label>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="row">
                                {{ Form::label('contact_type_code','Code',array('class'=>"label col col-2")) }}
                                <div class="col col-10">
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        {{ Form::text('contact_type_code',null,array( )) }}
                                    </label>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="row">
                                {{ Form::label('contact_type_status','Status',array('class'=>"label col col-2")) }}
                                <div class="col col-10">
                                    {{ Form::select('contact_type_status',[ '1'=>'Active', '0'=>'Inactive'],null,[ 'class'=>'select2'] )}}
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="row">
                                {{ Form::label('subject_mandatory','mandatory',array('class'=>"label col col-2")) }}
                                <div class="col col-10">
                                    {{ Form::select('subject_mandatory',[ '1'=>'Active', '0'=>'Inactive'],null,[ 'class'=>'select2'] )}}
                                </div>
                            </div>
                        </section>




                    </fieldset>

                    <footer>
                        {{ Form::submit('Save',array('class'=>'btn btn-primary')) }}
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </footer>

                    {!! Form::close() !!}
                    {{--</form>--}}



                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->
@endsection