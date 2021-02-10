@extends('layouts.app')
@section('content')
    <h1>Invoices</h1>
    @if(count($invoices)> 1 )
        @foreach($invoices as $invoice)
            <div class="well">
            <h3><a href="/invoice/{{$invoice->id}}">{{$invoice->id}}</a></h3>
            </div>
        @endforeach

    @else 
        <p> No invoice FOund</p>
    @endif

@endsection
