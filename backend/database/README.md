## ローカルでの DB 操作

mysql コンテナで mysql -u user -p  
パスワード求められるので password

## テーブル構成

### tiktok_comments

| カラム名  | 説明                                           |
| --------- | ---------------------------------------------- |
| id        | 主キー                                         |
| tiktok_id | tiktok 動画の id(一意に決まる id があるはず！) |
| comment   | 大喜利                                         |
| user_id   | nullable で投稿したユーザーの id(将来的に)     |
