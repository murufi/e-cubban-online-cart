@extends('layouts.admin')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection
