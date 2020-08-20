<?php
// 一問目 $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
// もし違ったら「あなたの名前ではありません」と表示するように実装してください。
$name = "Megumi";

if ($name = "Megumi"){
    echo "「私は". $name. "です」";
}  else {
    echo "「あなたの名前ではありません」";
}

echo "\n";

// 二問目 for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

// 三問目 $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "banana", "orange", "cherry", "lemon");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

// 四問目　4.　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください
for ($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}