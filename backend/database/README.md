## ローカルでの DB 操作

mysql コンテナで mysql -u user -p  
パスワード求められるので password

## テーブル構成

### tiktok_comments

| カラム名  | 型     | 説明                                                                      |
| --------- | ------ | ------------------------------------------------------------------------- |
| id        | serial | 主キー                                                                    |
| tiktok_id | bigint | tiktok 動画の id(一意に決まる id があるはず！)                            |
| comment   | text   | 大喜利                                                                    |
| votes     | bigint | いいね数                                                                  |
| user_id   | bigint | 投稿したユーザーの id(将来的に users テーブルの id に紐づく) ->あとで作る |
