{"filter":false,"title":"edit.blade.php","tooltip":"/blog/resources/views/posts/edit.blade.php","undoManager":{"mark":62,"position":62,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","    </head>","    <body>","        <h1>Blog Name</h1>","        <form action=\"/posts\" method=\"POST\">","            @csrf","            <div class=\"title\">","                <h2>Title</h2>","                <input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\"/>","                <p class=\"title_error\" style=\"color:red\">{{ $errors->first('post.title')}}</p>","            </div>","            <div class=\"body\">","                <h2>Body</h2>","                <textarea name=\"post[body]\" placeholder=\"今日も1日お疲れさまでした。\"></textarea>","                <p class=\"body__error\" style=\"color:red\">{{ $errors->first('post.body') }}</p>","            </div>","            <input type=\"submit\" value=\"保存\"/>","        </form>","        <div class=\"back\">[<a href=\"/\">back</a>]</div>","    </body>","</html>"],"id":1}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"remove","lines":["e"],"id":2},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"remove","lines":["m"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"remove","lines":["a"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"remove","lines":["N"]},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"remove","lines":[" "]},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"remove","lines":["g"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"remove","lines":["o"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"remove","lines":["l"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"remove","lines":["B"]}],[{"start":{"row":7,"column":12},"end":{"row":7,"column":14},"action":"insert","lines":["編集"],"id":3}],[{"start":{"row":7,"column":14},"end":{"row":7,"column":16},"action":"insert","lines":["画面"],"id":4}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["・"],"id":5}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["・"],"id":6}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["/"],"id":7},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["{"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["{"],"id":8},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["}"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["}"]}],[{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":[" "],"id":9},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["$"]}],[{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"insert","lines":["p"],"id":10},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["o"]},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"insert","lines":["s"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":[" "],"id":11},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["-"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":[">"]}],[{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":[" "],"id":12},{"start":{"row":8,"column":41},"end":{"row":8,"column":42},"action":"insert","lines":["i"]},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":17},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":10,"column":0},"end":{"row":10,"column":12},"action":"insert","lines":["            "]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["@"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["m"]},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":["e"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["t"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["h"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["o"]}],[{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["d"],"id":14}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":[" "],"id":15},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["="]}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":[" "],"id":16}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":[" "],"id":17},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["="]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":[" "]}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["("],"id":18},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":[")"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["'"],"id":19},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["p"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["u"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["'"],"id":20}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":[" "],"id":21},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["v"]},{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["a"]},{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["k"]}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"remove","lines":["k"],"id":22}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["l"],"id":23},{"start":{"row":13,"column":76},"end":{"row":13,"column":77},"action":"insert","lines":["u"]},{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"remove","lines":["r"],"id":24}],[{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"insert","lines":["e"],"id":25},{"start":{"row":13,"column":78},"end":{"row":13,"column":79},"action":"insert","lines":["="]},{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"insert","lines":["\""]}],[{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"insert","lines":["{"],"id":26},{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"insert","lines":["}"]},{"start":{"row":13,"column":82},"end":{"row":13,"column":83},"action":"insert","lines":["\""]}],[{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"insert","lines":["$"],"id":27},{"start":{"row":13,"column":82},"end":{"row":13,"column":83},"action":"insert","lines":["p"]},{"start":{"row":13,"column":83},"end":{"row":13,"column":84},"action":"insert","lines":["o"]},{"start":{"row":13,"column":84},"end":{"row":13,"column":85},"action":"insert","lines":["s"]},{"start":{"row":13,"column":85},"end":{"row":13,"column":86},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":85},"end":{"row":13,"column":86},"action":"remove","lines":["r"],"id":28}],[{"start":{"row":13,"column":85},"end":{"row":13,"column":86},"action":"insert","lines":["t"],"id":29},{"start":{"row":13,"column":86},"end":{"row":13,"column":87},"action":"insert","lines":["-"]},{"start":{"row":13,"column":87},"end":{"row":13,"column":88},"action":"insert","lines":[">"]}],[{"start":{"row":13,"column":88},"end":{"row":13,"column":89},"action":"insert","lines":["t"],"id":30},{"start":{"row":13,"column":89},"end":{"row":13,"column":90},"action":"insert","lines":["i"]},{"start":{"row":13,"column":90},"end":{"row":13,"column":91},"action":"insert","lines":["t"]},{"start":{"row":13,"column":91},"end":{"row":13,"column":92},"action":"insert","lines":["l"]},{"start":{"row":13,"column":92},"end":{"row":13,"column":93},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":73},"end":{"row":18,"column":74},"action":"insert","lines":["{"],"id":31},{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":["}"]}],[{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":["$"],"id":32}],[{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"insert","lines":[" "],"id":33}],[{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"remove","lines":[" "],"id":34},{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"remove","lines":["$"]}],[{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":[" "],"id":35},{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"insert","lines":["$"]},{"start":{"row":18,"column":76},"end":{"row":18,"column":77},"action":"insert","lines":["p"]},{"start":{"row":18,"column":77},"end":{"row":18,"column":78},"action":"insert","lines":["o"]},{"start":{"row":18,"column":78},"end":{"row":18,"column":79},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":79},"end":{"row":18,"column":80},"action":"insert","lines":["t"],"id":36},{"start":{"row":18,"column":80},"end":{"row":18,"column":81},"action":"insert","lines":["-"]},{"start":{"row":18,"column":81},"end":{"row":18,"column":82},"action":"insert","lines":[">"]}],[{"start":{"row":18,"column":82},"end":{"row":18,"column":83},"action":"insert","lines":["b"],"id":37},{"start":{"row":18,"column":83},"end":{"row":18,"column":84},"action":"insert","lines":["o"]},{"start":{"row":18,"column":84},"end":{"row":18,"column":85},"action":"insert","lines":["d"]},{"start":{"row":18,"column":85},"end":{"row":18,"column":86},"action":"insert","lines":["y"]}],[{"start":{"row":18,"column":86},"end":{"row":18,"column":87},"action":"insert","lines":[" "],"id":38}],[{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"insert","lines":["{"],"id":39}],[{"start":{"row":13,"column":95},"end":{"row":13,"column":96},"action":"insert","lines":["}"],"id":40}],[{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"insert","lines":["{"],"id":41}],[{"start":{"row":18,"column":88},"end":{"row":18,"column":89},"action":"insert","lines":["}"],"id":42}],[{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"remove","lines":["t"],"id":43},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["i"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"remove","lines":["m"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["b"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"remove","lines":["u"]},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"remove","lines":["s"]}],[{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":["u"],"id":44},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["p"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["d"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["a"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["t"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"remove","lines":["e"],"id":45},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["t"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"remove","lines":["a"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["d"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"remove","lines":["p"]},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"remove","lines":["u"]}],[{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":["s"],"id":46},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["u"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["b"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["m"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["i"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"remove","lines":["存"],"id":47},{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"remove","lines":["保"]}],[{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"insert","lines":["u"],"id":48},{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"insert","lines":["p"]},{"start":{"row":21,"column":42},"end":{"row":21,"column":43},"action":"insert","lines":["d"]},{"start":{"row":21,"column":43},"end":{"row":21,"column":44},"action":"insert","lines":["a"]},{"start":{"row":21,"column":44},"end":{"row":21,"column":45},"action":"insert","lines":["t"]},{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"insert","lines":["p"],"id":49},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"insert","lines":["o"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["a"]}],[{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["a"],"id":50}],[{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["s"],"id":51},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"insert","lines":["t"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"insert","lines":["s"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"insert","lines":["/"]}],[{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"insert","lines":["{"],"id":52},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"insert","lines":["}"]}],[{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"insert","lines":[" "],"id":53},{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"insert","lines":["$"]},{"start":{"row":23,"column":46},"end":{"row":23,"column":47},"action":"insert","lines":["p"]},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"insert","lines":["o"]},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"insert","lines":["s"]},{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":50},"end":{"row":23,"column":51},"action":"insert","lines":["-"],"id":54},{"start":{"row":23,"column":51},"end":{"row":23,"column":52},"action":"insert","lines":[">"]},{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"insert","lines":["i"]},{"start":{"row":23,"column":53},"end":{"row":23,"column":54},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":54},"end":{"row":23,"column":55},"action":"insert","lines":[" "],"id":55}],[{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"insert","lines":["{"],"id":56}],[{"start":{"row":23,"column":56},"end":{"row":23,"column":57},"action":"insert","lines":["}"],"id":57}],[{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"remove","lines":[" "],"id":58}],[{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"remove","lines":[" "],"id":59}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":101},"action":"remove","lines":["<textarea name=\"post[body]\" placeholder=\"今日も1日お疲れさまでした。\">{{ $post->body }}</textarea>"],"id":60}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":79},"action":"insert","lines":["<input type='text' name='post[body]' value=\"{{ $post->body }}\">"],"id":61}],[{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"remove","lines":["e"],"id":62},{"start":{"row":21,"column":44},"end":{"row":21,"column":45},"action":"remove","lines":["t"]},{"start":{"row":21,"column":43},"end":{"row":21,"column":44},"action":"remove","lines":["a"]},{"start":{"row":21,"column":42},"end":{"row":21,"column":43},"action":"remove","lines":["d"]},{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"remove","lines":["p"]},{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"remove","lines":["u"]}],[{"start":{"row":21,"column":40},"end":{"row":21,"column":42},"action":"insert","lines":["保存"],"id":63}]]},"ace":{"folds":[],"scrolltop":213.5,"scrollleft":0,"selection":{"start":{"row":21,"column":42},"end":{"row":21,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1637996116529,"hash":"f5244c8e06e6472dc0ccd64a4ffd963a658d5127"}