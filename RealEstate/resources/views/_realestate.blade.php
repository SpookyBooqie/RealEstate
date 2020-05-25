<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}}">
    <div>
        <h5 class="font-bold mb-4">
            {{$realestate->user->name}}
        </h5>

        <p class="text-sm mb-3">
            <a href="{{route('realestate', $realestate->address)}}">
                {{$realestate->address}}
            </a>
        </p>
    </div>
</div>
