<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWord;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {

            $id = $request->route()->parameter('word');

            if(!is_null($id)){ // null判定
                $wordUserId = Word::findOrFail($id)->user->id;
                $wordUserId = (int)$wordUserId; // キャスト 文字列→数値に型変換
                $userId = Auth::id();
                if($userId !== $wordUserId) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 表示順
        $sort = $request->sort == '2' ? 'asc' : 'desc';
        $query = auth()->user()->words()->orderBy('created_at', $sort);

        // 記憶度
        if (in_array($request->memory_search, ['1', '2', '3'])) {
            $query->where('memory', $request->memory_search);
        }

        $words = $query->paginate(12);

        return view('words.index', compact('words', 'sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWord $request)
    {
        auth()->user()->words()->create($request->all());

        return redirect()
        ->route('words.index')
        ->with(['message' => '単語の登録をしました。',
        'status' => 'info']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::findOrFail($id);

        return view('words.edit', compact('word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWord $request, $id)
    {
        $word = Word::findOrFail($id);
        $word->update($request->all());

        return redirect()
        ->route('words.index')
        ->with(['message' => '単語の編集をしました。',
        'status' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Word::findOrFail($id)->delete();

        return redirect()->route('words.index')
        ->with(['message' => '単語を削除しました。',
        'status' => 'alert']);
    }

    public function answerMemoryUpdate(Request $request, $id)
    {
        $word = Word::findOrFail($id);
        $word->memory = $request->memory;
        $word->save();

        return redirect()
        ->route('words.index')
        ->with(['message' => '記憶度の編集をしました。',
        'status' => 'info']);
    }
}
