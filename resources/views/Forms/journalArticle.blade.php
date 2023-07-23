<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <a href="/conference">Conference paper/proceeding</a>
    <div class="w-full max-w-xs place-items-center pl-10">
      <h1>Journal article</h1>
      <form action="/createJournalartical" class="w-full max-w-lg" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="TitlePaper" class="inline-block text-lg mb-2">Title of the Article</label>
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
          <label for="journalName" class="inline-block text-lg mb-2">Name of the Journal</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="journalName"
            value="{{old('journalName')}}" />

          @error('journalName')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="issue" class="inline-block text-lg mb-2">Issue (Journal)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="issue" value="{{old('issue')}}" />

          @error('issue')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="volume" class="inline-block text-lg mb-2">Volume (Journal)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="volume"
            value="{{old('volume')}}" />

          @error('volume')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="publicationYear" class="inline-block text-lg mb-2">Publication Year (Journal)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publicationYear"
            value="{{old('publicationYear')}}" />

          @error('publicationYear')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>




        <div class="mb-6">
          <label for="publicationDate" class="inline-block text-lg mb-2">Publication Date (Journal)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publicationDate"
            value="{{old('publicationDate')}}" />

          @error('publicationDate')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="publisher" class="inline-block text-lg mb-2">Publisher of the Journal</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publisher"
            value="{{old('publisher')}}" />

          @error('publisher')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="DOI" class="inline-block text-lg mb-2">DOI (Article)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="DOI" value="{{old('DOI')}}" />

          @error('DOI')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="URL" class="inline-block text-lg mb-2">URL (Article)</label>
          <input type="url" class="border border-gray-200 rounded p-2 w-full" name="URL" value="{{old('URL')}}" />

          @error('URL')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="document" class="inline-block text-lg mb-2">
            Document
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="document" />

          @error('document')
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
    <div class="">


  </x-card>
</x-layout>