{{--
  Template Name: home
--}}

@extends('layouts.app')

@section('content')
  @include('sections.hero')
  @include('sections.Featured-House')
  @include('sections.Ready-to-Sell')
  @include('sections.See-Our-Review')
  @include('sections.article')
  @include('sections.Subscribe')

@endsection
