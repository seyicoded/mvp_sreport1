@extends('admin.layout.app')
@section('content')
    <div class="w3-container w3-content">
        <h1>Newsletter</h1>
        <table class="w3-table w3-card-4">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{$item->n_id}}</td>
                        <td>{{$item->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
