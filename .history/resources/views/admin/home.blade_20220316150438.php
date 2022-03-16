@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <form method="POST" class="w3-center w3-card-4 w3-padding-32">
            <br/>
            @csrf
            <h1>Create new Link</h1>

            <div class="w3-container">
                <label class="w3-label w3-validate">CUSTOMER</label>
                <select>
                    <option>SELECT USER</option>
                    @foreach ($users as $dt)
                        <option value={{$dt->sa_user}}>{{$dt->email}}</option>
                    @endforeach
                </select>
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

        <div class="w3-center w3-card-4 w3-padding-32">
            <br />
            <h1>List a Entry</h1>

            <table class="w3-table w3-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Link</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{$dt->sd_id}}</td>
                            <td>{{url().'/storage/'.base64_encode($dt->doc_link)}}</td>
                            <td>{{date("Y-m-d", strtotime($dt->date))}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <br /> 
        </div>
    </div>
@endsection
