<?php
    // モデル(Model)
    // 会員の設計図作成
    class User {
        // プロパティ
        public $name; // 名前
        public $age; //年齢
        public $gender; //性別
        // コンストラクタ
        public function __construct($name, $age, $gender){
            // プロパティの初期化
            // this.name = name;
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            // print "{$this->name}さんが生まれた\n";
        }
        // デストラクタ
        public function __destruct(){
            // print "{$this->name}さんが死んだ\n";
        }
        // お酒を飲むメソッド作成
        public function drink(){
            if($this->age >= 20){
                return "{$this->name}さん、お酒OK\n";
            }else{
                $year = 20 - $this->age;
                return "{$this->name}さん、お酒NG。あと{$year}年待ちなさい\n";
            }
        }
        // 誰か(someone)に話しかけるメソッド
        public function talk($someone){
            print "{$this->name}さんが{$someone->name}さんに話しかけた\n";
        }
        
        // 入力値をチェックするメソッド
        public function validate(){
            $errors = array(); // 空の配列
            // もし名前が入力されていなければ
            if($this->name === ''){
                $errors[] = '名前を入力してください';
            }
             // もし年齢が入力されていなければ
            if($this->age === ''){
                $errors[] = '年齢を入力してください';
            }
             // もし年齢が正の整数でなければ
             // ^[0-9]+$/.test(this.age)
            else if(!preg_match('/^[0-9]+$/', $this->age)){
                $errors[] = '年齢は正の整数を入力してください';
            }
            
            return $errors;
        }
    }
    
    