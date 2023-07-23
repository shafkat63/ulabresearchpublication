<x-layout>

    <x-card>
        <div class="flex flex-col">

            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="mb-6">Journal</h1>
                @foreach ($journals as $journal)

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/journal/{{$journal->id}}">
                        <img class="rounded-t-lg"
                            src="{{$journal->document?asset('storage/'.$journal->document):asset('/images/logo.jpg')}}"
                            alt="" height="200" width="200" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$journal['TitlePaper']}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$journal['issue']}}</p>
                        {{-- <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <img class="w-3.5 h-3.5 ml-2"
                                src="{{$journal->document?asset('storage/'.$journal->document):asset('/images/logo.jpg')}}"
                                alt="" height="200" width="200" />

                        </a> --}}
                    </div>
                </div>

                @endforeach

            </div>






























            <div class="flex flex-col items-center justify-center text-center">
                <h1>Book Chapter</h1>
                @foreach ($bookChapters as $bookChapter)
                <h3>
                    {{$bookChapter['TitlePaper']}}
                </h3>
                <p>
                    {{$bookChapter['volume']}}
                </p>
                @endforeach

            </div>




        </div>
    </x-card>
</x-layout>