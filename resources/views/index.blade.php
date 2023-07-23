<x-layout>
  {{-- @if (!Auth::check()) --}}
  @include('partials._hero')
  {{-- @endif --}}

  @include('partials._search')
  @include('partials._applicationForm')
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($journals) == 0)

    @foreach($journals as $journal)
    <x-journalCard :journal="$journal" />
    @endforeach

    @else
    <p>No listings found</p>
    @endunless
  </div>

  <div class="mt-6 p-4">
    {{$journals->links()}}
  </div>

</x-layout>