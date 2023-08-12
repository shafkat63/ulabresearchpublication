<x-layout>
  {{-- @if (!Auth::check()) --}}
  @include('partials._hero')
  {{-- @endif --}}
@auth

  @include('partials._search')
  @include('partials._applicationForm')
  {{-- <a href="/auth/google ">
    <h4>Google Login</h4>
  </a> --}}
  <div class="flex items-center justify-center">
    <h1 class="color:black font-weight: 1600 text-6xl pb-3 ">Journals</h1>
  </div>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($journals ) == 0)

    @foreach($journals as $journal)
    <x-journalCard :journal="$journal" />
    @endforeach
    <br>


    {{-- @foreach($usersPosts as $user)
    <h1>users</h1>
    @endforeach --}}
    @else
    <p>No listings found</p>
    @endunless
  </div>

  <div class="flex items-center justify-center">
    <h1 class="color:black font-weight: 1600 text-6xl pb-3 ">Books</h1>
  </div>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($bookChapters ) == 0)

    @foreach($bookChapters as $book)
    <x-bookcard :book="$book" />
    @endforeach
    {{-- @foreach($usersPosts as $user)
    <h1>users</h1>
    @endforeach --}}
    @else
    <p>No listings found</p>
    @endunless
  </div>



  <div class="flex items-center justify-center">
    <h4 class="color:black font-weight: 1600 text-6xl pb-3 my-3  ">Conference Papers</h4>
  </div>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($conferencePapers ) == 0)

    @foreach($conferencePapers as $conferencePaper)
    <x-conferencePapersCard :conferencePaper="$conferencePaper" />
    @endforeach
    {{-- @foreach($usersPosts as $user)
    <h1>users</h1>
    @endforeach --}}
    @else
    <p>No listings found</p>
    @endunless
  </div>


  <br>



  <div class="mt-6 p-4">
    {{$journals->links()}}
  </div>
  {{-- <div class="mt-6 p-4">
    {{$bookChapters->links()}}
  </div> --}}
    
  @endauth
</x-layout>