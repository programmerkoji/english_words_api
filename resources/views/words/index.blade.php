<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            英単語管理アプリ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-gray-600 body-font">
                        <div class="mb-4">
                            <x-flash-message status="session('status')" />
                        </div>
                        <div class="mb-6 flex items-center flex-wrap gap-4">
                            <a href="{{ route('words.create') }}" class="inline-block text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">単語を登録する</a>
                            <div class="md:ml-auto flex justify-end gap-2">
                                <form action="{{ route('words.index') }}" method="get">
                                    <select name="memory_search" id="memory_search">
                                        <option value="">記憶度</option>
                                        <option value="1" @if(\Request::get('memory_search') === '1') selected @endif>○</option>
                                        <option value="2" @if(\Request::get('memory_search') === '2') selected @endif>△</option>
                                        <option value="3" @if(\Request::get('memory_search') === '3') selected @endif>☓</option>
                                    </select>
                                </form>
                                <form action="{{ route('words.index') }}" method="get">
                                    <select name="sort" id="sort">
                                        <option value="1" @if(\Request::get('sort') === '1') selected @endif>新しい順</option>
                                        <option value="2" @if(\Request::get('sort') === '2') selected @endif>古い順</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="container mx-auto">
                            <ul class="flex flex-wrap -m-2">
                                @foreach ($words as $word)
                                    <li class="w-full xl:w-1/3 md:w-1/2 p-2">
                                        <div class="border border-gray-200 p-3 rounded-lg flex flex-wrap items-center justify-between">
                                            <div class="flex items-center gap-4 w-3/4">
                                                @if ($word->memory === 1)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-green-500">
                                                        <img src="{{ asset('images/smile_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @elseif ($word->memory === 2)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-yellow-500">
                                                        <img src="{{ asset('images/usually_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @elseif ($word->memory === 3)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-red-500">
                                                        <img src="{{ asset('images/cry_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @endif
                                                <div class="w-4/5">
                                                    <p class="text-lg text-gray-900 font-medium title-font break-words mb-1">{{ $word->word_en }}</p>
                                                    <a href="#" data-micromodal-trigger="modal-{{ $word->id }}" class="text-xs px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500">答えを見る</a>
                                                </div>
                                            </div>
                                            <div class="w-1/4">
                                                <div class="text-right">
                                                    <a href="{{ route('words.edit', ['word' => $word->id]) }}" class="mx-auto text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded text-sm">編集</a>
                                                </div>
                                                <form id="delete_{{ $word->id }}" method="post" action="{{ route('words.destroy', ['word' => $word->id]) }}" class="text-right mt-2">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="#" data-id="{{ $word->id }}" onclick="deletePost(this)" class="mx-auto text-white bg-red-500 border-0 py-1 px-4 focus:outline-none hover:bg-red-600 rounded text-sm">削除</a>
                                                </form>
                                            </div>
                                            <div class="w-full text-right mt-3">
                                                <p class="text-sm">登録：{{ $word->created_at }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @foreach ($words as $word)
                                    <x-answer-modal :word="$word" />
                                @endforeach
                            <div class="mt-4">
                                {{ $words->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const sort_select = document.getElementById('sort');
        sort_select.addEventListener('change', function () {
            this.form.submit();
        });

        const memory_select = document.getElementById('memory_search');
        memory_select.addEventListener('change', function () {
            this.form.submit();
        });

        const modal_memory_selects = document.querySelectorAll('.modal_memory_search');
        modal_memory_selects.forEach(modal_memory_select => {
            modal_memory_select.addEventListener('change', function () {
                this.form.submit();
            })
        });

        function deletePost(e) {
        'use strict';
        if (confirm('本当に削除してもいいですか?')) { document.getElementById('delete_' + e.dataset.id).submit(); }
        }
    </script>
</x-app-layout>
