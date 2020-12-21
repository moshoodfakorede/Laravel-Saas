@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Billing</div>

                <div class="card-body">
                   You are now on a free plan. Please choose a plan to upgrade.
                   <br><br>
                   <div class="row">
                       @foreach ($plans as $plan)
                            <div class="col-md-4 text-center">
                                <h3>{{ $plan->name }}</h3>
                                <b>{{ $plan->price }}</b>
                                <hr>
                                <a href="{{ route('checkout', $plan->id) }}" class="btn btn-primary">Subscribe to {{ $plan->name }}</a>
                            </div>
                       @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
