@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-content w3-margin">

        {{-- i_id	investment_name	investment_duration	investment_daily	investment_amount	start_date	end_date	total_return	net_profit	status --}}

            <h2 class="w3-center" style="color: lightblue">Edit Investment for ({{$data['name']}})</h2>

            <form class="w3-padding-32 w3-round" method="POST" style="background: rgba(255, 255, 255, 0.4)">
                @csrf
                <div class="form-group w3-margin">
                    <label for="name">Investment Name</label>
                    <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data['data']->investment_name}}" required/>
                    <small id="name" class="form-text text-muted">Investment Name</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Investment Duration</label>
                    <textarea type="text"
                    class="form-control" name="duration" id="daily" aria-describedby="duration" placeholder="Enter input here" required>{{$data['data']->investment_duration}}</textarea>
                    <small id="description" class="form-text text-muted">Investment Duration</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Daily Returns</label>
                    <input type="text"
                    class="form-control" name="daily" id="daily" aria-describedby="daily" placeholder="" value="{{$data['data']->investment_daily}}" required/>
                    <small id="currency" class="form-text text-muted">Daily Returns</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Investment Amount</label>
                    <input type="number"
                    class="form-control" name="amount" id="amount" aria-describedby="amount" placeholder="Amount" value="{{$data['data']->investment_amount}}" required/>
                    <small id="amount" class="form-text text-muted">Investment Amount</small>
                </div>
                <div class="form-group w3-margin">
                    <label for="name">Start Date</label>
                    <input type="text"
                    class="form-control" name="start" id="start" aria-describedby="start" placeholder="start" value="{{$data['data']->start_date}}" required/>
                    <small id="start" class="form-text text-muted">Start Date</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">End Date</label>
                    <input type="text"
                    class="form-control" name="end" id="end" aria-describedby="end" placeholder="end" value="{{$data['data']->end_date}}" required/>
                    <small id="end" class="form-text text-muted">End Date</small>
                </div>
                <br />

                {{-- <div class="alert alert-info" role="alert">
                    <strong>NOTE:At the End of a Duration, The Rate Amount would be Added to the amount the Investor Invest</strong>
                </div> --}}
                <div class="form-group w3-margin">
                    <label for="name">Investment Total Returns</label>
                    <input type="text" class="form-control" name="returns" id="returns" aria-describedby="returns" placeholder="returns" value="{{$data['data']->total_return}}" required/>
                    <small id="returns" class="form-text text-muted">Total Returns</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Investment Net Profits</label>
                    <input type="number"
                    class="form-control" name="profits" id="profits" aria-describedby="profits" placeholder="profits" value="{{$data['data']->net_profit}}" required/>
                    <small id="profits" class="form-text text-muted">Net Profits</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label>Status</label>
                    <select name="status" class="w3-select">
                        <?php
                            $looper = [
                                ['i' => 0, 'value' => 'pending fund approval'],
                                ['i' => 1, 'value' => 'Active'],
                                ['i' => 2, 'value' => 'Finish'],
                                ['i' => 3, 'value' => 'Decline']
                            ];
                        ?>
                        @foreach ($looper as $item)
                            <option value="{{$item['i']}}" {{ ($item['i'] == $data['data']->status) ? 'selected':'' }}>{{$item['value']}}</option>
                        @endforeach
                    </select>
                    <small id="duration" class="form-text text-muted">Investment Duration (days)</small>
                </div>
                <br />

                <div style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>


            </form>
        </div>
    </div>

@endsection
