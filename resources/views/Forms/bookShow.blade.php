<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6"
          src="{{$singleBook->document ? asset('storage/' . $singleBook->document) : asset('/images/logo.png')}}"
          alt="" />


          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Title Paper:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->TitlePaper}}</h2>
          </div>
          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Author:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->Author}}</h2>
          </div>
          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Book Name:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->bookName}}</h2>
          </div>
          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Chapter Title:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->chapterTitle}}</h2>
          </div>

          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Issue:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->issue}}</h2>
          </div>
          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Volume:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->Volume}}</h2>
          </div>

          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Publication Year:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->PublicationYear}}</h2>
          </div>

          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Publication Date:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->PublicationDate}}</h2>
          </div>
          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">Book Publisher:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->BookPublisher}}</h2>
          </div>

          <div class="flex flex-row gap-1">
            <h2 class="text-xl mb-4 font-semibold">DOI:</h2>
            <h2 class="text-xl mb-4">{{$singleBook->DOI}}</h2>
          </div>
{{-- 
          <a href="{{$singleBook->URL}}" target="_blank"
            class="block bg-blue-300 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
              class="fa-solid fa-url"></i>
             {{ $singleBook->URL}} </a> --}}

        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-4"></h3>
          <div class="text-lg space-y-6">

            URL: <a href="{{$singleBook->URL}}" target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
              Visit Website</a>
          </div>
        </div>
      </div>
      
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/bookchapter/{{$singleBook->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/bookchapter/{{$singleBook->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card>
  </div>
</x-layout>