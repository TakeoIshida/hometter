{"filter":false,"title":"booksedit.blade.php","tooltip":"/cms/resources/views/booksedit.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":55,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('content')","    <div class=\"row container\">","        <div class=\"col-md-12\">","            <!-- ↓バリデーションエラーの表示に使用-->","\t\t\t@include('common.errors')","            <!-- ↑バリデーションエラーの表示に使用-->","            <form action=\"{{ url('books/update') }}\" method=\"POST\">","                <!-- item_text -->","                <div class=\"form-group p-2\">","                    <label for=\"item_text\">ツイート</label>","                    <input type=\"text\" name=\"item_text\" class=\"form-control\" id=\"item_text\" value=\"{{$book->item_text}}\">","                </div>","                <!--/ item_name -->","                ","                <!-- item_number -->","                <!--<div class=\"form-group p-2\">-->","                <!--    <label for=\"item_number\">冊数</label>-->","                <!--    <input type=\"text\" name=\"item_number\" class=\"form-control\" id=\"item_number\" value=\"{{$book->item_number}}\">-->","                <!--</div>-->","                <!--/ item_number -->","                ","                <!-- item_amount -->","                <!--<div class=\"form-group p-2\">-->","                <!--    <label for=\"item_amount\">金額</label>-->","                <!--    <input type=\"text\" name=\"item_amount\" class=\"form-control\" id=\"item_amount\" value=\"{{$book->item_amount}}\">-->","                <!--</div>-->","                <!--/ item_amount -->","                ","                <!-- published -->","                <!--<div class=\"form-group p-2\">-->","                <!--    <label for=\"published\">公開日</label>-->","                <!--    <input type=\"date\" name=\"published\" class=\"form-control\" id=\"published\" value=\"{{$book->published}}\">-->","                <!--</div>-->","                <!--/ published -->","                ","                <!-- 更新 ボタン/戻る ボタン -->","                <div class=\"form-group p-2\">","\t                <div class=\"well well-sm\">","\t                    <button type=\"submit\" class=\"btn btn-primary\">更新</button>","\t                    <a class=\"btn btn-link pull-right\" href=\"{{ url('/') }}\"> 戻る</a>","\t                </div>","                </div>","                <!--/ Save ボタン/Back ボタン -->","                ","                <!-- id 値を送信 -->","                <input type=\"hidden\" name=\"id\" value=\"{{$book->id}}\" />","                <!--/ id 値を送信 -->","                ","                <!-- CSRF -->","                @csrf","                <!--/ CSRF -->","            </form>","        </div>","    </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":611,"scrollleft":0,"selection":{"start":{"row":55,"column":11},"end":{"row":55,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":33,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1650330925031,"hash":"b5e56b4cad1618b26f821a4caf57631aaa22705e"}