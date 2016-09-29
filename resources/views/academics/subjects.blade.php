@extends('layouts.dt')
@section('title', 'Contact Types')
@section('widget-title', 'Manage Contact Types')
@section('widget-desc', 'Add/Edit/Delete Contact Types')
@section('dt-title', 'Contact Types')
@section('sparks')
    <a href="" data-toggle="modal" data-target="#remoteModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
        <i class="fa fa-circle-arrow-up fa-lg"></i>
        Add contact type
    </a>
@endsection

@section('content')
    {{--contains the grid--}}
    {{-- show success message if any--}}
    @include('layouts.includes._messages')
    <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Contact name</th>
            <th>Contact Code</th>
            <th>Contact status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contact_types as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->contact_type_name }}</td>
                <td>{{ $contact->contact_type_code }}</td>
                <td>{{ ($contact->contact_type_status == 1 )? 'Active':'Inactive'  }}</td>
                <td><a href="" data-toggle="modal" data-target="#edit-modal"  class="btn btn-default btn-sm">View</a></td>
                <td></td>
            </tr>
        @endforeach
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
                    <h4 class="modal-title">Add contact types </h4>
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