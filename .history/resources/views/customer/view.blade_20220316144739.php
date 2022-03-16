@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <form method="POST" class="w3-center w3-card-4 w3-padding-32">
            <br/>
            @csrf
            <h1>List a Customers</h1>

            <div class="w3-container">
                <input class="w3-input" placeholder="Enter Email" name="email" />
                <label class="w3-label w3-validate">Email</label>
            </div>

            <div class="w3-container">
                <input class="w3-input" placeholder="Enter Password" name="password" />
                <label class="w3-label w3-validate">Password</label>
            </div>

            <div class="w3-container w3-center">
                <button class="w3-btn w3-btn-block w3-blue w3-round">Create</button>
            </div>
            
            <br /> 
        </form>
    </div>
@endsection
