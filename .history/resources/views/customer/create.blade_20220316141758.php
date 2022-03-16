@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-center w3-card-4">
            <h1>Create a Customer</h1>

            <div class="w3-container">
                <input class="w3-input" placeholder="Enter Email" name="email" />
                <label class="w3-label w3-validate">Email</label>
            </div>

            <div class="w3-container">
                <input class="w3-input" placeholder="Enter Password" name="password" />
                <label class="w3-label w3-validate">Password</label>
            </div>
        </div>
    </div>
@endsection
