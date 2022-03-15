@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-content w3-margin">
            <h2 class="w3-center" style="color: lightblue">Settings</h2>

            <div class="alert alert-warning" role="alert">
                if value from this entry is changed, fear not if server crashes, it's just a re-start... take at-most 5 seconds to reflect
            </div>
            <form class="w3-padding-32 w3-round" method="POST" style="background: rgba(255, 255, 255, 0.4)">
                @csrf

                <div class="form-group w3-margin">
                    <label for="name">Crypto Name</label>
                    <input type="text"
                    class="form-control" name="crypto_name" id="crypto_name" aria-describedby="name" placeholder="Enter input here" value="{{env('BC_WALLET_NAME')}}" required/>
                    <small id="crypto_name" class="form-text text-muted">Crypto Name</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Crypto Wallet Address</label>
                    <input type="text"
                    class="form-control" name="crypto_address" id="crypto_address" aria-describedby="address" placeholder="Enter input here" value="{{env('BC_WALLET')}}" required/>
                    <small id="crypto_address" class="form-text text-muted">Crypto Name</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL HOST</label>
                    <input type="text"
                    class="form-control" name="mh" id="mh" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_HOST')}}"/>
                    <small id="mh" class="form-text text-muted">MAIL HOST</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL PORT</label>
                    <input type="text"
                    class="form-control" name="mp" id="mp" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_PORT')}}"/>
                    <small id="mp" class="form-text text-muted">MAIL PORT</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL USERNAME</label>
                    <input type="text"
                    class="form-control" name="mu" id="mu" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_USERNAME')}}"/>
                    <small id="mu" class="form-text text-muted">MAIL USERNAME</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL PASSWORD</label>
                    <input type="text"
                    class="form-control" name="mpass" id="mpass" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_PASSWORD')}}"/>
                    <small id="mpass" class="form-text text-muted">MAIL PASSWORD</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL ENCYPTION</label>
                    <input type="text"
                    class="form-control" name="me" id="me" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_ENCRYPTION')}}"/>
                    <small id="me" class="form-text text-muted">MAIL ENCYPTION</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">MAIL FORM ADDRESS</label>
                    <input type="text"
                    class="form-control" name="mfa" id="mfa" aria-describedby="address" placeholder="Enter input here" value="{{env('MAIL_FROM_ADDRESS')}}"/>
                    <small id="mfa" class="form-text text-muted">MAIL FORM ADDRESS</small>
                </div>
                <br />

                <div style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>


            </form>
        </div>
    </div>

@endsection
