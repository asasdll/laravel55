@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">หนัพนักงานทั่วไป</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="card-header" href="{{ "member" }}">
                    <h3>register_member</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
