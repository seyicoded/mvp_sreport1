@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-content w3-margin">
            <h2 class="w3-center" style="color: lightblue">Edit OverView Data ({{$data->email}})</h2>

            <form class="w3-padding-32 w3-round" method="POST" style="background: rgba(255, 255, 255, 0.4)">
                @csrf
                <div class="form-group w3-margin">
                    <label for="name">Deposit Balance</label>
                    <input type="text"
                    class="form-control" name="deposit_balance" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->deposit_balance}}" required/>
                    <small id="name" class="form-text text-muted">Deposit Balance</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Return on Investment</label>
                    <input type="text"
                    class="form-control" name="return_investment" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->return_investment}}" required/>
                    <small id="name" class="form-text text-muted">Return on Investment</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Return on Investment percentage</label>
                    <input type="text"
                    class="form-control" name="rerturn_pect" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->return_on_i_pect}}" required/>
                    <small id="name" class="form-text text-muted">Investment percentage</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Investment Duration</label>
                    <input type="text"
                    class="form-control" name="i_duration" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->investment_duration}}" required/>
                    <small id="name" class="form-text text-muted">Investment Duration</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Start Date</label>
                    <input type="text"
                    class="form-control" name="i_start" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->available_balance}}" required/>
                    <small id="name" class="form-text text-muted">Start Date</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">End Date</label>
                    <input type="text"
                    class="form-control" name="i_end" id="name" aria-describedby="name" placeholder="Enter input here" value="{{$data->toal_invested}}" required/>
                    <small id="name" class="form-text text-muted">End Date</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Status</label>
                        <select name="status" class="form-control w3-input">
                            @foreach (['','Pending','Active', 'Finished', 'Declined'] as $item)
                                <option value="{{$item}}" <?php
                                    
                                    switch ($data->total_profits) {
                                        case $item:
                                            echo 'selected';
                                            break;
                                        
                                        default:
                                            # code...
                                            break;
                                    }
                                
                                ?> >{{$item}}</option>
                            @endforeach
                        </select>
                    <small id="name" class="form-text text-muted">Status</small>
                </div>
                <br />

                {{-- <div class="form-group w3-margin">
                    <label for="name">Package Description</label>
                    <textarea type="text"
                    class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter input here" required>{{$data->p_desc}}</textarea>
                    <small id="description" class="form-text text-muted">Investment(Package) Description</small>
                </div>
                <br /> --}}

                

                <div style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>


            </form>
        </div>
    </div>

@endsection
