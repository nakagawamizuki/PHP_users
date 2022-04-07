<?php
    require_once 'models/Model.php';
    // モデル(Model)
    // 会員の設計図作成
    class User  extends Model{
        // プロパティ
        public $id; //ID
        public $name; // 名前
        public $age; //年齢
        public $gender; //性別
        public $created_at; //登録日時
        // コンストラクタ
        public function __construct($name='', $age='', $gender=''){
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
        
        // データベースの全データを取得するメソッド
        public static function all(){
            try {
                $pdo = self::get_connection();
                $stmt = $pdo->query('SELECT * FROM users ORDER BY id DESC');
                // フェッチの結果を、Userクラスのインスタンスにマッピングする
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
                $users = $stmt->fetchAll();
                self::close_connection($pdo, $stmt);
                // Userクラスのインスタンスの配列を返す
                return $users;
            } catch (PDOException $e) {
                return 'PDO exception: ' . $e->getMessage();
            }
        }
        
        // データを1件登録するメソッド
        public function save(){
            try {
                $pdo = self::get_connection();
                $stmt = $pdo->prepare("INSERT INTO users (name, age, gender) VALUES (:name, :age, :gender)");
                // バインド処理
                $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
                $stmt->bindParam(':age', $this->age, PDO::PARAM_INT);
                $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
                // 実行
                $stmt->execute();
                self::close_connection($pdo, $stmt);
                return "新規ユーザー登録が成功しました。";
                
            } catch (PDOException $e) {
                return 'PDO exception: ' . $e->getMessage();
            }
        }
    }
    
    