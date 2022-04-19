@extends('layouts.app')
@section('content')
    <div class="row container">
        <div class="col-md-12">
            <!-- ↓バリデーションエラーの表示に使用-->
			@include('common.errors')
            <!-- ↑バリデーションエラーの表示に使用-->
            <form action="{{ url('books/update') }}" method="POST">
                <!-- item_text -->
                <div class="form-group p-2">
                    <label for="item_text">ツイート</label>
                    <input type="text" name="item_text" class="form-control" id="item_text" value="{{$book->item_text}}">
                </div>
                <!--/ item_name -->
                
                <!-- item_number -->
                <!--<div class="form-group p-2">-->
                <!--    <label for="item_number">冊数</label>-->
                <!--    <input type="text" name="item_number" class="form-control" id="item_number" value="{{$book->item_number}}">-->
                <!--</div>-->
                <!--/ item_number -->
                
                <!-- item_amount -->
                <!--<div class="form-group p-2">-->
                <!--    <label for="item_amount">金額</label>-->
                <!--    <input type="text" name="item_amount" class="form-control" id="item_amount" value="{{$book->item_amount}}">-->
                <!--</div>-->
                <!--/ item_amount -->
                
                <!-- published -->
                <!--<div class="form-group p-2">-->
                <!--    <label for="published">公開日</label>-->
                <!--    <input type="date" name="published" class="form-control" id="published" value="{{$book->published}}">-->
                <!--</div>-->
                <!--/ published -->
                
                <!-- 更新 ボタン/戻る ボタン -->
                <div class="form-group p-2">
	                <div class="well well-sm">
	                    <button type="submit" class="btn btn-primary">更新</button>
	                    <a class="btn btn-link pull-right" href="{{ url('/') }}"> 戻る</a>
	                </div>
                </div>
                <!--/ Save ボタン/Back ボタン -->
                
                <!-- id 値を送信 -->
                <input type="hidden" name="id" value="{{$book->id}}" />
                <!--/ id 値を送信 -->
                
                <!-- CSRF -->
                @csrf
                <!--/ CSRF -->
            </form>
        </div>
    </div>
@endsection