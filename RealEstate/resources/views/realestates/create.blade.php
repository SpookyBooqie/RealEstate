@extends('layouts.app')

@section('content')

    <form method="POST" action="/realestates/create" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="price">
                Price
            </label>

            <input class="border border-gray-400 p-2 w-full" type="number" name="price" id="price" required value="250000">

            @error('price')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                Address
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="address" id="address" required>

            @error('address')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                Description
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" required>

            @error('description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>

            <a href="/realestates" class="hover:underline">Cancel</a>

        </div>

    </form>

@endsection
