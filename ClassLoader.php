<?php
/*知らなかった関数など
 *spl_autoload_register()::未定義のクラスやインターフェイスを使おうとすると、自動的に呼び出す（オートローディングする）ようにする組み込み関数
 *is_readable::指定したファイル名が読み込み可能か確認
 */
class ClassLoader{

  protected $dirs;

  //オートローダクラスを登録する処理
  public function register(){
    spl_autoload_register(array($this, 'loadClass'));
  }

  //読み込むディレクトリを登録する処理
  public function registerDir($dir){
    $this->dirs[] = $dir;
  }

  //オートロード時にPHPから自動的に呼び出され、クラスファイルを読み込みを行う処理
  public function loadClass($class){
    foreach($this->dirs as $dir){
      $file = $dir.'/'.$class.'.php';
      if(is_readable($file)){
        require $file;

        return;
      }
    }
  }
}
