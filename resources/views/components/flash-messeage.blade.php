@props(['status' => 'info'])

{{-- create画面_statusを渡してbgcolor変更 --}}
@php
    if(session('status') === 'info'){ $bgcolor = 'bg-blue-300';}
    if(session('status') === 'alert'){ $bgcolor = 'bg-red-500';}
@endphp

@if (session('message'))
    <div class="{{ $bgcolor }} w-1/2 mx-auto p-2 text-white">
        {{ session('message') }}
    </div>
@endif