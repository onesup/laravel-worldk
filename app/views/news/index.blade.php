@extends('layouts.master')
@section('title') 
  월드키친소식
@stop
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop