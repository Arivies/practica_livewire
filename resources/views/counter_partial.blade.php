@extends('home')

@section('content')
<div>
    @livewire('counter')
    {{-- <livewire:counter />--}}

    @livewireScripts
</div>
@endsection
