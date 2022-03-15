@extends('admin.layout.app')
@section('content')
    <div class="w3-container w3-content">
        <div class="w3-card-4 w3-margin w3-round">
            <h1 class="w3-center">{{$data['u_dt']->name}}</h1>
            <div class="w3-center"><small class="w3-center">{{$data['u_dt']->email}}</small></div>

            <br />
            @if(count($data['kyc_dt']) > 0)
                <div>
                    <div>KYC: 
                    <?php
                        switch (intval($data['kyc_dt'][0]->status)) {
                            case 0:
                                echo 'not available yet';
                                break;

                            case 1:
                                echo 'pending Approval';
                                break;

                            case 2:
                                echo 'Approved';
                                break;

                            case 3:
                                echo 'Cancelled';
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    ?>
                    </div>
                    <br />
                    @if( intval($data['kyc_dt'][0]->status) != 2 )
                        <div style="display:flex; alignItems: flex-end;">
                            <button class="w3-btn btn-block btn btn-danger" onclick="window.location.href = '{{url('/admin/update-kyc/3/'.$data['u_dt']->i_id)}}' ">Decline KYC</button>
                            <button class="w3-btn btn-block btn btn-primary" onclick="window.location.href = '{{url('/admin/update-kyc/2/'.$data['u_dt']->i_id)}}' ">Approve KYC</button>
                        </div>
                    @endif
                    
                    <br />

                    <ul class="w3-ul">
                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">First Name</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->first_name}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Last Name</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->last_name}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Phone</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->phone}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">dob</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->dob}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Telegram Username</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->telegram_un}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Address 1</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->address1}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Address 2</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->address2}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">city</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->city}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">state</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->state}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Nationality</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->nationality}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Zip Code</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->zipcode}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Date</div>
                                <div class="w3-col s12 m6 l6">{{$data['kyc_dt'][0]->date_created}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Front Image</div>
                                <div class="w3-col s12 m6 l6"><a href="{{url('images/kyc')}}/{{$data['kyc_dt'][0]->doc1}}" target="_blank">Click to View</a></div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Back Image</div>
                                <div class="w3-col s12 m6 l6"><a href="{{url('images/kyc')}}/{{$data['kyc_dt'][0]->doc2}}" target="_blank">Click to View</a></div>
                            </div>
                        <li>
                    </ul>
                </div>
            @else
                <div class="w3-center">KYC information not available yet</div>
            @endif
            
        </div>
    </div>
@endsection
