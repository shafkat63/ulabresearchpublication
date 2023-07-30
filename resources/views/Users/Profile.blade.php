<x-layout>
    <x-card>

        <div class="flex justify-center gap-x-1">
            <h1 class="">Name: </h1>
            <h1>{{auth()->user()->name}}</h1>
            {{-- <h1>{{auth()->user()->email}}</h1> --}}
        </div>
        <div class="flex justify-center gap-x-1">
            {{-- <h1>{{auth()->user()->name}}</h1> <br> --}}
            <h1 class="">Email:</h1>
            <h1> {{auth()->user()->email}}</h1>
        </div>
        <div class="flex justify-center gap-x-1 mt-4" >
            {{-- <h1>{{auth()->user()->name}}</h1> <br> --}}
            <h1 class="">Photo:</h1>
            {{-- <h1> {{auth()->user()->photo}}</h1> --}}

            <img class="hidden w-48 mr-6 md:block mt-4"
                src="{{auth()->user()->photo?asset('storage/'.auth()->user()->photo): asset('/images/logo.jpg')}}"
                alt="">
        </div>

    </x-card>

</x-layout>