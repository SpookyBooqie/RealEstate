@extends('layouts.app')

@section('content')

    <div class="border border-gray-300 rounded-lg">
        @forelse($realestates as $realestate)
            @include('_realestate')
        @empty
            <p class="p-4">No tweets yet.</p>
        @endforelse


    </div>

@endsection
