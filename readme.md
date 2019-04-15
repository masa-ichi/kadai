#基本課題1
===

# 1.使用した技術要素
* PHP 7.1
* laravel 5.5
* jQuery 1.9.1
* MySQL 5.7.21
* Apache 2.4.28


**商品データの登録・検索・変更・削除を行う、RESTfulなAPIです．**

商品データは下記の情報を持ちます．
-商品画像
-商品タイトル(最大100文字)
-説明文(最大500文字)
-価格

##アクセスURL
api/product

##POSTデータ(JSON形式)

| JSON KEY    | 型         | サイズ | 必須 | 値の説明 |
|-------------|------------|--------|------|----------|
| image       | mediumblob |        |      | 商品画像 |
| title       | string     | 100    |      | 商品名   |
| description | string     | 500    |      | 説明文   |
| price       | int        |        |      | 価格     |
| image       | int        |        |      | 画像id   |

##返却データ(JSON形式)

| JSON KEY    | 型         | サイズ | 必須 | 値の説明 |
|-------------|------------|--------|------|----------|
| id          | int        |        | 〇   | 商品id   |
| image       | mediumblob |        |      | 商品画像 |
| title       | string     | 100    |      | 商品名   |
| description | string     | 500    |      | 説明文   |
| price       | int        |        |      | 価格     |
| image       | int        |        |      | 画像id   |
| created_at  | datetime   |        |      | 作成日時 |
| updated_at  | datetime   |        |      | 更新日時 |
