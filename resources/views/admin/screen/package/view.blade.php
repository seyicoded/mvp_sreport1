@extends('admin.layout.app')
@section('content')

<div class="w3-container">
    <h1 class="w3-hover-text-blue w3-center" style="font-weight: bold">View Investments</h1>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable" id="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Description</th>
                <th>Currency</th>
                <th>Min Amount</th>
                <th>Max Amount</th>
                <th>Rate Obtain (after duration)</th>
                <th>Rate Per Day</th>
                <th>Duration (days)</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td>{{$dt->p_id}}</td>
                    <td>{{$dt->p_name}}</td>
                    <td>{{$dt->p_desc}}</td>
                    <td>{{$dt->p_currency}}</td>
                    <td>{{$dt->minimum_amount}}</td>
                    <td>{{$dt->maximum_amount}}</td>
                    <td>{{$dt->interest_rate}} %</td>
                    <td>{{(floatval($dt->interest_rate) / floatval($dt->duration))}} %</td>
                    <td>{{$dt->duration}}</td>
                    <td>{{(intval($dt->status) == 1) ? 'Active': 'In-Active'}}</td>
                    <td><button onclick="window.location.href = '{{url('/admin/package/edit/'.$dt->p_id)}}' " class="btn btn-primary">Edit</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
