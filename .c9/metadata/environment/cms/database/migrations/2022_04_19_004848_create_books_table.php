{"filter":false,"title":"2022_04_19_004848_create_books_table.php","tooltip":"/cms/database/migrations/2022_04_19_004848_create_books_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":15,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["Schema::create('books', function (Blueprint $table) {","            $table->id();","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":8},"end":{"row":21,"column":11},"action":"insert","lines":["Schema::create('books', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->bigInteger('user_id');","            $table->string('item_text');","            $table->string('item_img');","            $table->timestamps();","        });"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":11},"end":{"row":21,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":33,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1650329476090,"hash":"c77789af0d2bd68e306296346be64f215c2071a5"}