@props(['book'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$book->document ? asset('storage/' . $book->document) : asset('/images/logo.jpg')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/bookchapter/{{$book->id}}">{{$book->TitlePaper}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$book->Author}}</div>
      {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}
      <div class="text-lg mt-4">
        <i class="fa-solid fa-mug-hot"></i> {{$book->BookPublisher}}
      </div>
    </div>
  </div>
</x-card>