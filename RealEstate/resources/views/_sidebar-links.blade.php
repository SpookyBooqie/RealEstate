<ul>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/realestates"
        >Home</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/realestates/create"
        >Create</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
