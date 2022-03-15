@extends('admin.layout.app')
@section('content')
<div class="w3-container">
    <h1 class="w3-hover-text-blue w3-center" style="font-weight: bold">View Investments</h1>

    <div class="w3-container" style="overflow: auto">
    {{-- i_id	investment_name	investment_duration	investment_daily	investment_amount	start_date	end_date	total_return	net_profit	status --}}
        <table class="w3-table w3-bordered w3-small w3-striped w3-border w3-hoverable" id="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Investor Name</th>
                    <th>Package Name</th>
                    <th>Currency</th>
                    <th>Amount Invested</th>
                    <th>Daily Returns</th>
                    <th>Investment Gross Duration (Month)</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Returns</th>
                    <th>Net Profit</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{$dt['data']->ih_id}}</td>
                        <td>{{$dt['name']}}</td>
                        <td>{{$dt['data']->investment_name}}</td>
                        <td>USD</td>
                        <td>{{$dt['data']->investment_amount}}</td>
                        <td>{{$dt['data']->investment_daily}}</td>
                        <td>{{$dt['data']->investment_duration}}</td>
                        <td>{{date('d-M-Y', strtotime($dt['data']->start_date))}}</td>
                        <td>{{date('d-M-Y', strtotime($dt['data']->end_date))}}</td>
                        <td>{{$dt['data']->total_return}}</td>
                        <td>{{$dt['data']->net_profit}}</td>
                        <td style="font-weight: bold">
                            @switch(intval($dt['data']->status))
                                        @case(0)
                                            Pending Approval Upon Payment
                                            @break
                                        @case(1)
                                            Active
                                            @break
                                        @case(2)
                                            Finished
                                            @break
                                        @case(3)
                                            Declined
                                            @break
                                        
                                        @default

                                    @endswitch
                        </td>
                        <td>
                            <div class="w3-dropdown-click">
                                <button onclick="window.location.href='{{url('admin/update-n-investment/'.$dt['data']->ih_id)}}'" class="btn btn-secondary">Edit!</button>
                                <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                                  {{-- <a href="{{url('admin/update-n-investment/'.$dt['data']->ih_id.)}}" class="w3-bar-item w3-button">U</a> --}}
                                </div>
                              </div>
                        </td>
                        <td>{{date('d-M-Y', strtotime($dt['data']->date_created))}}</td>
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
