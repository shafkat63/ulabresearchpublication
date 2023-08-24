
<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">

    <header class="text-center">
      <h2 class="text-2xl font-semibold  uppercase mb-4">Book Publishing</h2>
    </header>


    <div class="w-full max-w-xs  pl-10">
      <form method="POST" action="/createBookPost" class="w-full max-w-lg mb-6 pd-6" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="TitlePaper" class="inline-block text-lg mb-2">Title of the Chapter</label>
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

          @error('Author')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="bookName" class="inline-block text-lg mb-2">Name of the book</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="bookName"
            value="{{old('bookName')}}" />

          @error('bookName')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
          <label for="chapterTitle" class="inline-block text-lg mb-2">Title of the Chapter</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="chapterTitle"
            value="{{old('chapterTitle')}}" />

          @error('chapterTitle')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="issue" class="inline-block text-lg mb-2">Issue</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="issue" value="{{old('issue')}}" />

          @error('issue')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>




        <div class="mb-6">
          <label for="Volume" class="inline-block text-lg mb-2">Volume</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Volume"
            value="{{old('Volume')}}" />

          @error('Volume')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="PublicationYear" class="inline-block text-lg mb-2">Publication Year (Book)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="PublicationYear"
            value="{{old('PublicationYear')}}" />

          @error('PublicationYear')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>



        <div class="mb-6">
          <label for="PublicationDate" class="inline-block text-lg mb-2">Publication Date (Book)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="PublicationDate"
            value="{{old('PublicationDate')}}" />

          @error('PublicationDate')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="BookPublisher" class="inline-block text-lg mb-2">Publisher of the Book</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="BookPublisher"
            value="{{old('BookPublisher')}}" />

          @error('BookPublisher')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="DOI" class="inline-block text-lg mb-2">DOI (Chapter)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="DOI" value="{{old('DOI')}}" />

          @error('DOI')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="URL" class="inline-block text-lg mb-2">URL (Chapter)</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="URL" value="{{old('URL')}}" />

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
  </x-card>
</x-layout>