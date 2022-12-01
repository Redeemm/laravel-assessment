<x-guest-layout>

    <p>Hello, {{auth()->user()->name}}</p>

    <a href="{{route('logout')}}">login</a>

</x-guest-layout>
