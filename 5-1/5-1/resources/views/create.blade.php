@extends('layouts.admin')
@section('title', 'つぶやき新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <h2>つぶやき新規作成</h2>
                    <form action="{{ url('/create') }}" method="POST" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group">
                            <label class="col-md" for="body">今の気分</label>
                            <div class="col-md-5">
                                <textarea name="tweet" cols="30" rows="10" placeholder="今の気分は〇〇です。"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md" for="video">動画</label>
                            <div class="col-md-5">
                                <video controls playsinline muted src="https://res.cloudinary.com/code-kitchen/video/upload/v1555082747/movie.mp4"></video>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="投稿する">
                    </form>
                    <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <<h4>class="modal-title" id="myModalLabel">投稿確認画面</h4></h4>
                                </div>
                                <div class="modal-body">
                                    <label>本当に世に放ちますか？</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                    <button type="button" class="btn btn-primary">投稿</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection