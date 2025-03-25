@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header align-middle d-flex justify-content-between">
                        <div class="align-self-center">
                            {{ __('Users') }}
                        </div>
                        <div class="align-self-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">{{ __('New') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tr>
                                    <td class="align-middle">{{ $user->name }}</td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary btn-sm">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection