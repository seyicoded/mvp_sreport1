@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-center w3-card-4 w3-padding-32">
            <br />
            <h1>List a Entry</h1>

            <table class="w3-table w3-striped">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Link</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{$dt->email}}</td>
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
