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
                            <a class="btn btn-danger btn-sm" href="{{ route('users.index') }}">{{ __('Cancel') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name')  }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
