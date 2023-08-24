<x-layout>
    <x-slot:title>
        Yousuf Molla
    </x-slot:title>
    <x-slot:heading>
        Yousuf Vai Jindabad!
    </x-slot:heading>
    <h2>Molla Solt</h2>
    @php
        $n1 = 1;
    @endphp
    @while ($n1 < 10)
        {{ $n1++ }}
    @endwhile
    <div>
        @for ($i = 1; $i < 10; $i++)
            {{ $i }}
        @endfor
    </div>

    @auth
        <div>User Logedin</div>
    @endauth

    @guest
        <div>User is not Logedin</div>
    @endguest
</x-layout>
