@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                  <a class="New Macaddress" href="{{ "" }}">
                  <h3>New Macaddress</h3>
                  </a>
                <div class="card-body">
                    <form method="POST" action="{{ ('Macaddress') }}"  enctype="multipart/form-data">
                        @csrf
                          <div class="form">
                            <div class="form-group">
                              <label for="inputEmail4">New-Macaddress</label>
                              <input id="name" type="text" class="form-control is-invalid @error('Macaddress') is-invalid @enderror" name="Macaddress" value="{{ old('Macaddress') }}" required autocomplete="Macaddress" autofocus>
                              @error('Macaddress')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message}}</strong>
                                  </span>
                              @enderror
                            </div>
                          <br>
                          <br>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('สมัคร') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
