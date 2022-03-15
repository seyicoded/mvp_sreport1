@extends('admin.layout.app')
@section('content')
<div class="w3-container">
    <h1 class="w3-hover-text-blue w3-center" style="font-weight: bold">View Investments</h1>

    <div class="w3-container" style="overflow: auto">
        <table class="w3-table w3-bordered w3-small w3-striped w3-border w3-hoverable" id="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Tnx Ref</th>
                    <th>Investor Name</th>
                    <th>Package Name</th>
                    <th>Currency</th>
                    <th>Amount Invested</th>
                    <th>Investment Gross Duration (Month)</th>
                    <th>Amount Generated</th>
                    <th>Days Spent</th>
                    <th>Gross Interest Rate</th>
                    <th>Daily Interest</th>
                    <th>Total Amount Withdrawable</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{$dt['data']->sl_id}}</td>
                        <td>{{$dt['data']->tnx_ref}}</td>
                        <td>{{$dt['name']}}</td>
                        <td>{{$dt['p_name']}}</td>
                        <td>{{$dt['data']->i_currency}}</td>
                        <td>{{number_format($dt['data']->i_amount)}}</td>
                        <td>{{$dt['data']->i_duration}}</td>
                        <td>{{number_format($dt['data']->g_amount)}}</td>
                        <td>{{$dt['data']->day_count}}</td>
                        <td>{{$dt['data']->i_rate}} %</td>
                        <td>{{(floatval($dt['data']->i_rate) / floatval($dt['data']->i_duration))}} %</td>
                        <td>{{number_format(intval($dt['data']->i_amount)+intval($dt['data']->g_amount))}}</td>
                        <td style="font-weight: bold">
                            @switch(intval($dt['data']->status))
                                        @case(0)
                                            Pending Payment
                                            @break
                                        @case(1)
                                            (Paid) Pending Admin Approval
                                            @break
                                        @case(2)
                                            Active
                                            @break
                                        @case(3)
                                            Finished
                                            @break
                                        @case(4)
                                            Pending Withdrawal
                                            @break
                                        @case(5)
                                            Withdrew
                                            @break
                                        @case(6)
                                            Cancelled
                                            @break

                                        @default

                                    @endswitch
                        </td>
                        <td>
                            <div class="w3-dropdown-click">
                                <button onclick="myFunction()" class="btn btn-secondary">Action!</button>
                                <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/0')}}" class="w3-bar-item w3-button">Mark as Pending Payment</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/1')}}" class="w3-bar-item w3-button">Mark as (Paid) Pending Admin Approval</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/2')}}" class="w3-bar-item w3-button">Mark as Active</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/3')}}" class="w3-bar-item w3-button">Mark as Finished</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/4')}}" class="w3-bar-item w3-button">Mark as Pending Withdrawal</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/5')}}" class="w3-bar-item w3-button">Mark as Withdrawed</a>
                                  <a href="{{url('admin/update-investment/'.$dt['data']->sl_id.'/6')}}" class="w3-bar-item w3-button">Mark as Cancelled</a>
                                </div>
                              </div>
                        </td>
                        <td>{{date('Y-M-d', strtotime($dt['data']->date))}}</td>
                    </tr>
                @endforeach

                <script>
                    function myFunction() {
                      var x = document.getElementById("Demo");
                      if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                      } else {
                        x.className = x.className.replace(" w3-show", "");
                      }
                    }
                </script>
            </tbody>
        </table>
    </div>

</div>
@endsection
