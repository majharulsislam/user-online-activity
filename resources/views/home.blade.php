@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Status</th>
                        </thead>
                        <tbody>
                           @foreach($users as $user)
                              <tr>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>
                                    @if($user->isOnline())
                                       <li class="text-success">Online</li>
                                    @else
                                       <li class="mute">Ofline</li>
                                    @endif
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
