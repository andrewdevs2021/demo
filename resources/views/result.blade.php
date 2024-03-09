@extends('layouts.app')

@section('content')
    <div>First Name: {{ $data->first_name }}</div>
    <div>Last Name: {{ $data->last_name }}</div>
    <div>Address: {{ $data->address }}</div>
    <div>Country: {{ $data->country->name }}</div>
    <div>City: {{ $data->city->name }}</div>
    <div>Date Of Birth: {{ $data->date_of_birth }}</div>
    <hr>
    <div>Is Married?: {{ $data->is_married ? 'yes' : 'No' }}</div>
    @if ($data->is_married)
        <div>Mirrage Country: {{ $data->mirrageCountry->name }}</div>
        <div>Mirrage Date: {{ $data->date_of_marriage }}</div>
    @else
        <div>{{ $data->is_widowed ? 'Is ' : 'Is Not ' }}Widowed</div>
        <div>{{ $data->is_passed_married ? '' : 'Not ' }}Married In The Past</div>
    @endif
@endsection
