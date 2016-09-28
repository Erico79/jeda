@extends('layouts.wizard')
@section('title', 'Create Masterfile')
@section('widget-title', 'Create Masterfile Wizard')
@section('widget-desc', 'Allows you to register people')

@section('content')
    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
        <!-- widget options:
        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

        data-widget-colorbutton="false"
        data-widget-editbutton="false"
        data-widget-togglebutton="false"
        data-widget-deletebutton="false"
        data-widget-fullscreenbutton="false"
        data-widget-custombutton="false"
        data-widget-collapsed="true"
        data-widget-sortable="false"

        -->
        <header>
            <span class="widget-icon"> <i class="fa fa-check"></i> </span>
            <h2> Add New Masterfile </h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body">

                <div class="row">
                    <form id="wizard-1" novalidate="novalidate">
                        <div id="bootstrap-wizard-1" class="col-sm-12">
                            <div class="form-bootstrapWizard">
                                <ul class="bootstrapWizard form-wizard">
                                    <li class="active" data-target="#step1">
                                        <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Basic information</span> </a>
                                    </li>
                                    <li data-target="#step2">
                                        <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Contact Details</span> </a>
                                    </li>
                                    <li data-target="#step3">
                                        <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Other Details</span> </a>
                                    </li>
                                    <li data-target="#step4">
                                        <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Save Form</span> </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    @include('masterfile.basic_info')
                                </div>
                                <div class="tab-pane" id="tab2">
                                    @include('masterfile.contact_details')
                                </div>
                                <div class="tab-pane" id="tab3">
                                    @include('masterfile.others')
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <br>
                                    <h3><strong>Step 4</strong> - Save Form</h3>
                                    <br>
                                    <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                    <h4 class="text-center">Click next to finish</h4>
                                    <br>
                                    <br>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="pager wizard no-margin">
                                                <!--<li class="previous first disabled">
                                                <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                                                </li>-->
                                                <li class="previous disabled">
                                                    <a href="javascript:void(0);" class="btn btn-lg btn-default"> Previous </a>
                                                </li>
                                                <!--<li class="next last">
                                                <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                                                </li>-->
                                                <li class="next">
                                                    <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Next </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
@endsection