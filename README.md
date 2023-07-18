# Laravel 10 從資料庫資料表結構描述自動產生基本驗證

引入 laracraft-tech 的 laravel-schema-rules 套件來擴增從資料庫資料表結構描述自動產生基本驗證，提供一個便利的方法產生各種強大的驗證規則來驗證傳入的 HTTP 請求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __schema:generate-rules__ 來產生資料表相對應表單請求。
```sh
$ php artisan schema:generate-rules {資料表名稱} --create-request
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/V2LrpUb.png)
> 產生房產資料表相對應表單請求

![](https://i.imgur.com/WNkiL4B.png)
> 驗證失敗會拋出一個例外並把適當的錯誤訊息回傳給使用者
