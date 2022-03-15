@extends('admin.layout.app')
@section('content')
    <div class="w3-container">
        <div class="w3-content w3-margin">
            <h2 class="w3-center" style="color: lightblue">Create Investment Package</h2>

            <form class="w3-padding-32 w3-round" method="POST" style="background: rgba(255, 255, 255, 0.4)">
                @csrf
                <div class="form-group w3-margin">
                    <label for="name">Package Name</label>
                    <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter input here" required/>
                    <small id="name" class="form-text text-muted">Investment(Package) Name</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Package Description</label>
                    <textarea type="text"
                    class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter input here" required></textarea>
                    <small id="description" class="form-text text-muted">Investment(Package) Description</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Default Currency</label>
                    <input type="text"
                    class="form-control" name="currency" id="currency" aria-describedby="currency" placeholder="" value="USD" disabled required/>
                    <small id="currency" class="form-text text-muted">Default Currency</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Min Amount</label>
                    <input type="number"
                    class="form-control" name="amount" id="amount" aria-describedby="amount" placeholder="Amount" required/>
                    <small id="amount" class="form-text text-muted">Investment Min Amount</small>
                </div>
                <div class="form-group w3-margin">
                    <label for="name">Max Amount</label>
                    <input type="number"
                    class="form-control" name="max_amount" id="max_amount" aria-describedby="amount" placeholder="Amount" required/>
                    <small id="max_amount" class="form-text text-muted">Investment Max Amount</small>
                </div>
                <br />

                <div class="alert alert-info" role="alert">
                    <strong>NOTE:At the End of a Duration, The Rate Amount would be Added to the amount the Investor Invest</strong>
                </div>
                <div class="form-group w3-margin">
                    <label for="name">Investment Profit Rate</label>
                    <input type="number"
                    class="form-control" name="rate" id="rate" aria-describedby="rate" placeholder="Rate" required/>
                    <small id="rate" class="form-text text-muted">Investment Rate</small>
                </div>
                <br />

                <div class="form-group w3-margin">
                    <label for="name">Investment Duration (month)</label>
                    <input type="number"
                    class="form-control" name="duration" id="duration" aria-describedby="duration" max="100" min="1" placeholder="Duration in days" value="30" required/>
                    <small id="duration" class="form-text text-muted">Investment Duration (days)</small>
                </div>
                <br />

                <div style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>


            </form>
        </div>
    </div>

@endsection
