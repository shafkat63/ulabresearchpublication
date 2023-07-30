@props(['journal'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$journal->document ? asset('storage/' . $journal->document) : asset('/images/logo.jpg')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/journal/{{$journal->id}}">{{$journal->TitlePaper}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$journal->journalName}}</div>
      {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}
      <div class="text-lg mt-4">
        <i class="fa-solid fa-mug-hot"></i> {{$journal->publisher}}
      </div>
    </div>
  </div>
</x-card>