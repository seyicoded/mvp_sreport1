@extends('admin.layout.app')
@section('content')
<div class="w3-container">
    <h1 class="w3-hover-text-blue w3-center" style="font-weight: bold">View Investors</h1>

    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable" id="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Currency</th>
                <th>Date</th>
                <th>CLICK FOR KYC INFO</th>
                <th>OVERVIEW DATA</th>
                <th>Notification Preference</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td>{{$dt->i_id}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->currency}}</td>
                    <td>{{date('Y-M-d', strtotime($dt->date))}}</td>
                    <td><?php
                        try {
                            $rec = DB::select('SELECT * from user_details where u_id = ?', [$dt->i_id])[0];
                            ?>
                                <button onclick="window.location.href = '{{url('/admin/view-kyc/'.$dt->i_id)}}' " class="w3-btn btn btn-secondary">{{(intval($rec->status) == 0) ? 'KYC not filled': ((intval($rec->status) == 1) ? 'KYC pending approval':'KYC approved')}}</button>
                            <?php
                        } catch (\Throwable $th) {
                            ?>
                                <button onclick="window.location.href = '{{url('/admin/view-kyc/'.$dt->i_id)}}' " class="w3-btn btn btn-secondary">KYC not filled</button>
                            <?php
                        }
                        

                    ?></td>

                    <td>
                        <button onclick="window.location.href = '{{url('/admin/view-overview/'.$dt->i_id)}}' " class="w3-btn btn btn-secondary">OverView</button>
                    </td>

                    <td>
                        <button onclick="window.location.href = '{{url('/admin/view-notification-pref/'.$dt->i_id)}}' " class="w3-btn btn btn-secondary">View</button>
                    </td>

                    <td><button onclick="window.location.href = '{{url('/admin/view-investments/'.$dt->i_id)}}' " class="btn btn-primary">View Investment</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
