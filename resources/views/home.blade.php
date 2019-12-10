@php
    $currentUser = Auth::user();
    $allUsers = \App\User::where("id", "!=", $currentUser->id)->get();
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Transfer coins</div>
                <div class="card-body">
                    @include("transfer-form")
                </div>
            </div>

            <div class="card">
                <div class="card-header">Transfer coins safely</div>
                <div class="card-body">
                    @csrf
                    @include("transfer-form")
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
