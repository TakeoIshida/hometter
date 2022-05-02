@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            hometter
        </div>
        
        <!-- ↓バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- ↑バリデーションエラーの表示に使用-->

        <!-- ツイート登録フォーム -->
        @if(Auth::check())
            <form action="{{ url('books') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <!-- ツイート内容 -->
                <div class="form-group col-md-6 p-2">
                    <label for="item_text" class="col-sm-3 control-label">つぶやき</label>
                    <input type="text" name="item_text" class="form-control" id="item_text" value="{{ old('item_text') }}">
                    <label>画像ファイル:</label>
                    <input type="file" class="form-control" name="item_img">
                </div>
                <!-- 冊数 -->
                <!--<div class="form-group col-md-6 p-2">-->
                <!--    <label for="item_number" class="col-sm-3 control-label">冊数</label>-->
                <!--    <input type="text" name="item_number" class="form-control" id="item_number" value="{{ old('item_number') }}">-->
                <!--</div>-->
                <!-- 金額 -->
                <!--<div class="form-group col-md-6 p-2">-->
                <!--    <label for="item_amount" class="col-sm-3 control-label">金額</label>-->
                <!--    <input type="text" name="item_amount" class="form-control" id="item_amount" value="{{ old('item_amount') }}">-->
                <!--</div>-->
                <!-- 公開日 -->
                <!--<div class="form-group col-md-6 p-2">-->
                <!--    <label for="published" class="col-sm-3 control-label">公開日</label>-->
                <!--    <input type="date" name="published" class="form-control" id="published" value="{{ old('published') }}">-->
                <!--</div>-->
                <!-- ツイート 登録ボタン -->
                <div class="form-group p-2">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            つぶやく
                        </button>
                    </div>
                </div>
            </form>
        @endif
    </div>
	<!-- Book: 既に登録されてるツイートのリスト -->
    @if (count($books) > 0)
        <div class="card-body">
            <h3>つぶやき一覧</h3>
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>つぶやき</th>
                    <th>ユーザー名</th>
                    <th>つぶやき日時</th>
                    <th>削除</th>
                    <th>更新</th>
                    <th>Goodjob</th>
                    <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <!-- ツイート -->
                            <td class="table-text">
                                <div>{{ $book->item_text }}</div>
                                <div><img src="upload/{{$book->item_img}}"width="100"></div>
                            </td>
                            
                            </td>
                            <!-- 登録者名 ↓ここを追加-->
                            <td class="table-text">
                                <div>{{ $book->user->name }}</div>
                            </td>
                            <!-- ツイート時間 -->
                            <td class="table-text">
                                <div>{{ $book->created_at }}</div>
                            </td>
                            <!-- ツイート: 削除ボタン -->
                            <td>
                                @if($book->user_id === Auth::id())
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <!-- ツイート: 更新ボタン -->
                            <td>
                                @if($book->user_id === Auth::id())
                                    <a href="{{ url('booksedit/'.$book->id) }}">
                                        <button type="submit" class="btn btn-primary">更新</button>
                                    </a>
                                @endif
                            </td>
                            <!-- Likeボタン -->
                            <td>
                            	@if($book->favoriteBook()->where('user_id',Auth::id())->exists() === false)
                                	<form action="{{ url('book/'.$book->id.'/like') }}" method="POST">
                                		{{ csrf_field() }}
                                		<button type="submit" class="btn btn-outline-warning">
                                		    Goodjob
                                		</button>
                                	</form>
                            	@endif
                            	
                            	@if($book->favoriteBook()->where('user_id',Auth::id())->exists() === true)
                                	<form action="{{ url('book/'.$book->id.'/unlike') }}" method="POST">
                                		{{ csrf_field() }}
                                		<button type="submit" class="btn btn-warning">
                                		    Goodjob
                                		</button>
                                	</form>
                            	@endif
                            	 <div class="row justify-content-center">
                                <p>Goodjob数：{{ $book->favoriteBook()->count() }}</p>
                                
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <div class="d-flex justify-content-center">
    {{ $books->links() }}
    </div>
@endsection