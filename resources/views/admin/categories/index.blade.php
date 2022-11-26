@extends('layouts.admin-panel')
@section('content')
    <div class="bg-gray-100 px-2 py-4 mx-4 border-2 rounded">
        <h1 class="mt-2 mb-4 mx-2 text-2xl">لیست پست ها</h1>

        @livewire('admin.categories-viewer')


        <div class="mt-4">
            @livewire('admin.categories-create')
        </div>
    </div>
@endsection
