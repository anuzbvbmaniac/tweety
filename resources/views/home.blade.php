@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('partials._sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include('partials._publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('partials._tweet')
                @include('partials._tweet')
                @include('partials._tweet')
                @include('partials._tweet')
            </div>

        </div>
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('partials._friends-list')
        </div>
    </div>
@endsection
