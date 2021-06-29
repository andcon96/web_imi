@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fade-in">
            <div class="row">
              <div class="col-sm-12 offset-md-2 col-md-8">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> <h4>User {{ $user->name }}</h4> </div>
                    <div class="card-body">
                      <div class="mb-4">
                        <h4>Name: {{ $user->name }}</h4>
                      </div>
                      <div class="mb-4">
                        <h4>E-mail: {{ $user->email }}</h4>
                      </div>
  
                        <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection