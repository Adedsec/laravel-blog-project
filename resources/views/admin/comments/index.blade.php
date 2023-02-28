@extends('layouts.admin-panel')

@section('content')

    <div class="bg-gray-100 px-2 py-4 mx-4 border-2 rounded divide-y">
        <h1 class="mt-2 mb-4 mx-2 text-2xl">{{__("Categories Management")}}</h1>
        @livewire('admin.comments-viewer')
    </div>

@endsection
