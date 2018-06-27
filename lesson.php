<?php

class User{
  public $name;  
  public function run(){
      print "run";
  }
}

$user = new User;

$user->name = 'rakuten';

// print $user -> name;

$user->run();


// モデルを作る際には、全部小文字で複数形で作る
// このクラスは名前を
// 新規インスタンスはnewをつけて書く
// アロー演算子はインスタンスに対してしか使えない
// methodについて、何かしらのふるまい
// public function $run()これがmethodの基本形
// インスタンスメソッドはインスタンスにしか使えないメソッド
// アロー演算子の右側はインスタンスメソッド、左側はインスタンス
// クラスメソッドは::←これで表示される。