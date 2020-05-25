@extends('layouts.app')

@section('content')


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="price">
                Price
            </label>

                <p>{{$realestate->price}}</p>

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                Address
            </label>

                <p>{{$realestate->address}}</p>
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                Description
            </label>

                {!!$realestate->description!!}

        </div>

        <form method="POST" action="/realestates/send">
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="">
                Contact
            </label>

            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{$realestate->user->email}}" readonly="readonly">

        </div>


    <div class="mb-6">
        <h1>
            <strong>Contact Salesperson</strong>
        </h1>

        <textarea class="border border-gray-400 p-2 w-full" type="text" name="message" id="message" required rows="5" placeholder="Enter message here..."></textarea>

    </div>

        <div class="mb-6">
            @csrf
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Send
            </button>

            <a href="/realestates/" class="hover:underline">Back</a>

        </div>
</form>

@endsection
