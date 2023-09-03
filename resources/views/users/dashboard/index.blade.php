@extends('layouts.users.app')
@foreach($userAccounts as $userAccount)
    <div>{{$userAccount->number}}</div>
    <div>{{$userAccount->currency}}</div>
    <div>{{$userAccount->balance}}</div>
@endforeach
