## 環境構築させたい

### リポジトリのclone

### .envを作成して.env.exampleをコピペ

### docker-compose up --build

### phpコンテナ内でmigration実行(DBテーブルの初期化)
・vscodeのdocker拡張機能からtiktok-ogiri_backend_1を右クリックでattach shell
もしくは
・Docker Desktopのtiktok-ogiri_backend_1のCLI
でコンテナ内に入り、php artisan migrate

### localhostにアクセスしてなんか表示されたらOK

以下は俺的学びがあったやつ
https://hara-chan.com/it/infrastructure/docker-laravel-migration-could-not-find-driver/
https://bure.undo.jp/2019/10/05/post-105/