@extends('layouts.admin')

@section('content')

@if(isset($record_found) && $record_found==0)
    No record found.
@endif

    @endsection