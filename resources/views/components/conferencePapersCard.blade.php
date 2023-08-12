@props(['conferencePaper'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$conferencePaper->document ? asset('storage/' . $conferencePaper->document) : asset('/images/logo.jpg')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/conferencePaper/{{$conferencePaper->id}}">{{$conferencePaper->TitlePaper}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$conferencePaper->Author}}</div>
      {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}
      {{-- <div class="text-lg mt-4">
        <i class="fa-solid fa-mug-hot"></i> {{$conferencePaper->BookPublisher}}
      </div> --}}
    </div>
  </div>
</x-card>