@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-md">
        <div class="mb-4">
            <strong>First Name:</strong> {{ $data->first_name }}
        </div>
        <div class="mb-4">
            <strong>Last Name:</strong> {{ $data->last_name }}
        </div>
        <div class="mb-4">
            <strong>Address:</strong> {{ $data->address }}
        </div>
        <div class="mb-4">
            <strong>Country:</strong> {{ $data->country->name }}
        </div>
        <div class="mb-4">
            <strong>City:</strong> {{ $data->city->name }}
        </div>
        <div class="mb-4">
            <strong>Date Of Birth:</strong> {{ $data->date_of_birth }}
        </div>
        <hr class="my-6">
        <div class="mb-4">
            <strong>Is Married?:</strong> {{ $data->is_married ? 'Yes' : 'No' }}
        </div>
        @if ($data->is_married)
            <div class="mb-4">
                <strong>Marriage Country:</strong> {{ $data->marriageCountry->name }}
            </div>
            <div class="mb-4">
                <strong>Marriage Date:</strong> {{ $data->date_of_marriage }}
            </div>
        @else
            <div class="mb-4">
                {{ $data->is_widowed ? '<strong>Is Widowed</strong>' : '<strong>Is Not Widowed</strong>' }}
            </div>
            <div class="mb-4">
                {{ $data->is_passed_married ? '' : '<strong>Not </strong>' }}Married In The Past
            </div>
        @endif
    </div>
@endsection
