@extends('admin.layout.app')
@section('content')
    <div class="w3-container w3-content">
        <div class="w3-card-4 w3-margin w3-round">
            <h1 class="w3-center">{{$data->name}}</h1>
            <div class="w3-center"><small class="w3-center">{{$data->email}}</small></div>

            <br />
            @if(true)
                <div>

                    <ul class="w3-ul">
                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Email me whenever encounter unusual activity</div>
                                <div class="w3-col s12 m6 l6">{{(intval($data->noti1) == 1) ? 'Yes':'No'}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Email me if new browser is used to sign in</div>
                                <div class="w3-col s12 m6 l6">{{(intval($data->noti2) == 1) ? 'Yes':'No'}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Notify me by email about sales and latest news</div>
                                <div class="w3-col s12 m6 l6">{{(intval($data->noti3) == 1) ? 'Yes':'No'}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Email me about new features and updates</div>
                                <div class="w3-col s12 m6 l6">{{(intval($data->noti4) == 1) ? 'Yes':'No'}}</div>
                            </div>
                        <li>

                        <li>
                            <div class="w3-row">
                                <div class="w3-col s12 m6 l6">Email me about tips on using account</div>
                                <div class="w3-col s12 m6 l6">{{(intval($data->noti5) == 1) ? 'Yes':'No'}}</div>
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
