<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            単語を編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-gray-600 body-font relative">
                        <div class="container px-5 mx-auto">
                            <form action="{{ route('words.update', ['word' => $word->id]) }}" method="post" class="lg:w-1/2 md:w-2/3 mx-auto">
                                @method('PUT')
                                @csrf
                                <div class="flex flex-wrap -m-2">
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="word_en" class="leading-7 text-sm text-gray-600">英単語</label>
                                            <input type="text" id="word_en" name="word_en" value="{{ $word->word_en }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            @error('word_en')
                                            <p class="text-rose-700">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="word_ja" class="leading-7 text-sm text-gray-600">日本語訳</label>
                                            <input type="text" id="word_ja" name="word_ja" value="{{ $word->word_ja }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            @error('word_ja')
                                            <p class="text-rose-700">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="p-2 w-full md:w-1/2">
                                        <div class="relative">
                                            <label class="leading-7 text-sm text-gray-600">品詞</label>
                                            <select name="part_of_speech" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <option value="">選択してください</option>
                                                <option value="1" @if($word->part_of_speech === 1) selected @endif>名詞</option>
                                                <option value="2" @if($word->part_of_speech === 2) selected @endif>動詞</option>
                                                <option value="3" @if($word->part_of_speech === 3) selected @endif>形容詞</option>
                                                <option value="4" @if($word->part_of_speech === 4) selected @endif>副詞</option>
                                                <option value="5" @if($word->part_of_speech === 5) selected @endif>熟語</option>
                                            </select>
                                            @error('part_of_speech')
                                            <p class="text-rose-700">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="p-2 w-full md:w-1/2">
                                        <div class="relative">
                                            <label class="leading-7 text-sm text-gray-600">記憶度</label>
                                            <select name="memory" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <option value="">選択してください</option>
                                                <option value="1" @if($word->memory === 1) selected @endif>覚えた</option>
                                                <option value="2" @if($word->memory === 2) selected @endif>たまに忘れる</option>
                                                <option value="3" @if($word->memory === 3) selected @endif>よく忘れる</option>
                                            </select>
                                            @error('memory')
                                            <p class="text-rose-700">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                        <label for="memo" class="leading-7 text-sm text-gray-600">メモ</label>
                                        <textarea id="memo" name="memo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $word->memo }}</textarea>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full flex">
                                        <button type="button" onclick="location.href='{{ route('words.index') }}'" class="flex mx-auto text-white bg-gray-300 border-0 py-2 px-4 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                                        <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
