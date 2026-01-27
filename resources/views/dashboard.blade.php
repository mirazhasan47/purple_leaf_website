@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">{{ $usersCount ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <p class="card-text">{{ $productsCount ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
