## 環境構築させたい

### リポジトリの clone

### .env を作成して.env.example をコピペ

### docker-compose up --build

### php コンテナ内で migration 実行(DB テーブルの初期化)

・vscode の docker 拡張機能から tiktok-ogiri_backend_1 を右クリックで attach shell
もしくは
・Docker Desktop の tiktok-ogiri_backend_1 の CLI
でコンテナ内に入り、php artisan migrate

### localhost にアクセスしてなんか表示されたら OK

以下は俺的学びがあったやつ
https://hara-chan.com/it/infrastructure/docker-laravel-migration-could-not-find-driver/
https://bure.undo.jp/2019/10/05/post-105/
http://psychedelicnekopunch.com/archives/2479
