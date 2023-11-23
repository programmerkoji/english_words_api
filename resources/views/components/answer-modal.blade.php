<div class="modal micromodal-slide" id="modal-{{ $word->id }}" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-{{ $word->id }}-title">
            <div class="modal__header">
                <div class="flex items-center gap-4">
                    @if ($word->part_of_speech === 1)
                        <p class="text-sm px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500 min-w-fit">名詞</p>
                    @elseif ($word->part_of_speech === 2)
                        <p class="text-sm px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500 min-w-fit">動詞</p>
                    @elseif ($word->part_of_speech === 3)
                        <p class="text-sm px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500 min-w-fit">形容詞</p>
                    @elseif ($word->part_of_speech === 4)
                        <p class="text-sm px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500 min-w-fit">副詞</p>
                    @elseif ($word->part_of_speech === 5)
                        <p class="text-sm px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500 min-w-fit">熟語</p>
                    @endif
                    <p class="modal__title" id="modal-{{ $word->id }}-title">{{ $word->word_ja }}</p>
                </div>
                <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </div>
            <div class="modal__content" id="modal-{{ $word->id }}-content">
                <p>{{ $word->memo }}</p>
            </div>
            <div class="modal__footer">
                <form action="{{ route('words.answerMemoryUpdate', ['word' => $word->id]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <ul class="flex flex-col md:flex-row gap-2">
                        <li><button type="submit" name="memory" value="1" class="modal__btn" @if($word->memory == '1')  style="background-color: #999;color: #fff;" @endif >覚えた</button></li>
                        <li><button type="submit" name="memory" value="2" class="modal__btn" @if($word->memory == '2')  style="background-color: #999;color: #fff;" @endif>たまに忘れる</button></li>
                        <li><button type="submit" name="memory" value="3" class="modal__btn" @if($word->memory == '3')  style="background-color: #999;color: #fff;" @endif>よく忘れる</button></li>
                    </ul>
                </form>
                <button type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
            </div>
        </div>
    </div>
</div>
