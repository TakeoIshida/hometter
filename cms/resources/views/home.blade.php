@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="alert alert-primary">
        <div>マイページサンプル</div>
        <div>ログインユーザーの情報のみ表示</div>
    </div>
    <table class="table table-striped task-table">
        <!-- テーブルヘッダ -->
        <thead>
            <th>ツイート一覧</th>
            <th>&nbsp;</th>
        </thead>
        <!-- テーブル本体 -->
        <tbody>
            @if(isset($books))
                @foreach ($books as $book)
                    <tr>
                        <!-- ツイート-->
                        <td class="table-text">
                            <div>{{ $book->item_text }}</div>
                            <div><img src="upload/{{$book->item_img}}"width="100"></div>
                        </td>
                        <!-- 本: 削除ボタン -->
                        <td>
                            <form action="{{ url('book/'.$book->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    削除
                                </button>
                            </form>
                        </td>
                        <!-- 本: 更新ボタン -->
                        <td>
                            <a href="{{ url('booksedit/'.$book->id) }}">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </a>
                        </td>
                        
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
            @endif
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
