<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Laravel サンプルサイト

## ダウンロード方法

git clone

git clone https://github.com/YuiHirayama/laravel.git

git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 https://github.com/YuiHirayama/laravel.git

もしくはzipファイルでダウンロードしてください

## インストール方法

- cd laravelapp
- composer install または composer update
- npm install
- npm run dev

.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=

XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されればOK)

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan serve
で簡易サーバーを立ち上げ、表示確認してください。


## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg 〜 sample6.jpg として
保存しています。

php artisan storage:link で
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し
画像を保存してください。

## 設計書について
プロジェクト直下のmdフォルダに、以下2点を格納しております。<br>
1.URL設計書.md<br>
2.テーブル設計書.md

## 決済について
決済のテストとしてstripeを利用しています。<br>
必要な場合は .env にstripeの情報を追記してください。
