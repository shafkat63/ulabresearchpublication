<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6"
          src="{{$singleConferencePaper->document ? asset('storage/' . $singleConferencePaper->document) : asset('/images/logo.jpg')}}"
          alt="" />
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Title Paper:</h2>
          <h2 class="text-xl mb-4">{{$singleConferencePaper->TitlePaper}}</h2>
        </div>

        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Author:</h2>
          <h2 class="text-xl mb-4">{{$singleConferencePaper->Author}}</h2>
        </div>

        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Conference Name:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->conferenceName}}</h2>
        </div>
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Conference Acronym:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->conferenceAcronym}}</h2>
        </div>


        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Conference Location:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->conferenceLocation}}</h2>
        </div>


        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">DOI:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->DOI}}</h2>
        </div>


        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Book Series:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->bookSeries}}</h2>
        </div>
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Issue:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->issue}}</h2>
        </div>


        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Volume:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->volume}}</h2>
        </div>


        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Publication Year:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->publicationYear}}</h2>
        </div>
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Publication Date:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->publicationDate}}</h2>
        </div>
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">Publisher:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->publisher}}</h2>
        </div>
        <div class="flex flex-row gap-1">
          <h2 class="text-xl mb-4 font-semibold">User:</h2>
          <h2 class="text-xl mb-4"> {{$singleConferencePaper->user->name}}</h2>
        </div>

        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-4"></h3>
          <div class="text-lg space-y-6">

            URL: <a href="{{$singleConferencePaper->URL}}" target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
              Visit Website</a>
          </div>
        </div>
      </div>
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/journal/{{$singleConferencePaper->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/journal/{{$singleConferencePaper->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card>
  </div>
</x-layout>