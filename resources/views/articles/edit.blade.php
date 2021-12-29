@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">新規投稿</div>
                <div class="card-body">
                    <form action="{{ route('articles.update', $article->id) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">タイトル</label>
                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $article->title) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-2 col-form-label text-md-right">本文</label>
                            <div class="col-md-9">
                                <textarea name="body" id="body" style="resize: none; height: 200px; width: 100%">{{ old('body', $article->body) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">ステータス</label>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" id="open" name="status" value="0" {{ $article->status === 0 ? 'checked' : null }}>
                                <label class="form-check-label" for="open">公開</label>
                             </div>
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="private"  name="status" value="1" {{ $article->status === 1 ? 'checked' : null }}>
                                <label class="form-check-label" for="private">未公開</label>
                             </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" onClick="history.back()">戻る</button>
                            <button type="submit" class="btn btn-primary ml-3" name='action' value='add'>
                                編集
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection