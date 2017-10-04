@extends('layouts.master')


@section('caption')
    Best Teacher of the year!
@endsection
@section('title')
    Let the best win!
@endsection
@section('subtitle')
    <!--The winner is to be announced at the P-Certificate ceremony-->
@endsection

<!-- three categories, three lists -->
@include('qualifications.alist')
@include('qualifications.blist')
@include('qualifications.clist')

<!--response form imported-->
@include('responseform.respform')

<!--errors-->
@include('layouts.errors')