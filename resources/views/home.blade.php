@extends('layouts.app')

@section('content')

<div class="">


    <div class="row justify-content-center">
        <div class="col-sm-2 sidebar">
       @include('menu.addinvoice') </br>
        <a href="/invoice" class="btn btn-primary">Invoices</a>
           <button class="btn nav-btn1"></button>
           <button class="btn nav-btn1"></button>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    {{ __('You are logged in!') }}
                    
                    
                
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
