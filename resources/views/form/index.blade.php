<?php
/**
 * Created by PhpStorm.
 * User: joel
 * Date: 9/28/16
 * Time: 6:46 PM
 */
@extends('layouts.dt')
@section('title', 'Add Forms')
@section('widget-title', 'Manage Forms')
@section('widget-desc', 'Add/Edit/Delete Forms')
@section('dt-title', 'Form')
@section('sparks')
    <a href="" data-toggle="modal" data-target="#remoteModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
        <i class="fa fa-circle-arrow-up fa-lg"></i>
        Add Form
    </a>
@endsection