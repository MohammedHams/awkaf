@extends('layouts.users.app')

@foreach($transactions as $transaction)
    <div>Transaction Number: {{$transaction->number}}</div>
    <div>Currency: {{$transaction->currency}}</div>
    <div>Type: {{$transaction->type}}</div>
    <div>Amount: {{$transaction->amount}}</div>
    <div>Timestamp: {{$transaction->timestamp}}</div>
    <hr>
@endforeach
