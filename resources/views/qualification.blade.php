@extends('layouts.master')

@section('extra')
  <!--@if($qualification->id != 1)
    <a href="{{$qualification->id-1}}">back...</a>
  @endif-->
@endsection

@section('caption')
    {{$qualification->title}}
@endsection
@section('title')
    <!--Enter to make your choice!-->
@endsection
@section('subtitle')
    {{$qualification->description}}
    <!--2017-->
    <!--The winner is to be announced at the P-Certificate ceremony-->
@endsection

@include('func.f_qual')
@include('sizeconfig.smallmain')