<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-semibold uppercase mb-4">Conference Paper</h2>
      {{-- <p class="mb-4">Post a gig to find a developer</p> --}}
    </header>
    <div class="w-full max-w-xs place-items-center pl-10">
      <form action="/createConferencePaper" class="w-full max-w-sm" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-6">
          <label for="TitlePaper" class="inline-block text-lg mb-2">Title of the paper</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="TitlePaper"
            value="{{old('TitlePaper')}}" />

          @error('TitlePaper')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="Author" class="inline-block text-lg mb-2">Author Names (As per the paper)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Author"
            value="{{old('Author')}}" />

          @error('TitlePaper')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="conferenceName" class="inline-block text-lg mb-2">Name of the Conference </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="conferenceName"
            value="{{old('conferenceName')}}" />

          @error('conferenceName')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="conferenceAcronym" class="inline-block text-lg mb-2">Name of the Conference Acronym</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="conferenceAcronym"
            value="{{old('conferenceAcronym')}}" />

          @error('conferenceAcronym')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="conferenceLocation" class="inline-block text-lg mb-2">Conference Location [ If any]</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="conferenceLocation"
            value="{{old('conferenceLocation')}}" />

          @error('conferenceLocation')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="DOI" class="inline-block text-lg mb-2">DOI (Paper)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="DOI" value="{{old('DOI')}}" />

          @error('DOI')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="URL" class="inline-block text-lg mb-2">URL (Paper)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="URL" value="{{old('URL')}}" />

          @error('URL')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>




        <div class="mb-6">
          <label for="bookSeries" class="inline-block text-lg mb-2">If Book series, Name of the Series</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="bookSeries"
            value="{{old('bookSeries')}}" />

          @error('bookSeries')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="volume" class="inline-block text-lg mb-2">Volume (Book Series)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="volume"
            value="{{old('volume')}}" />

          @error('volume')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="issue" class="inline-block text-lg mb-2">Issue (Book Series)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="issue" value="{{old('issue')}}" />

          @error('issue')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="publicationYear" class="inline-block text-lg mb-2">Publication Year (Proceeding)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publicationYear"
            value="{{old('publicationYear')}}" />

          @error('publicationYear')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="publicationDate" class="inline-block text-lg mb-2">Publication Date (Proceeding)</label>
          <input type="date" class="border border-gray-200 rounded p-2 w-full" name="publicationDate"
            value="{{old('publicationDate')}}" />

          @error('publicationDate')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="publisher" class="inline-block text-lg mb-2">Publisher of the Proceeding</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publisher"
            value="{{old('publisher')}}" />

          @error('publisher')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="document" class="inline-block text-lg mb-2">
            Document
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="document" />

          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <button class="bg-laravel bg-blue-500 text-white rounded py-2 px-4 hover:bg-black">
            Submit
          </button>

          <a href="/" class="text-black ml-4"> Back </a>
        </div>

      </form>

    </div>
  </x-card>
</x-layout>