# 咖啡商店

>[參考至此教學連結](https://dometi.com.tw/blog/category/%E7%B6%B2%E9%A0%81/%E7%B6%B2%E9%A0%81%E5%BE%8C%E7%AB%AF/laravel/)

## 前置作業

1. 重建 Laravel

需要重建 Laravel 專案 <br>

```cmd
cd laravel
composer install
cp .env.example .env
php artisan key:generate
```
>[可參考此網站](https://campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbdsn=1255) 

2. 重建 Laradock

``` cmd
cd laradock
cp env-example .env
```

3. 建立 SQL 資料

需要建置 mysql database => laravel_frontend_backend <br>
建置表單與預設資料集<br>
``` cmd
php artisan migrate #資料表建置
php artisan db:seed #給予初始數值
```

4. 調整 .env 內的 DB_HOST <br>
```cmd
vim .env

#將127.0.0.1 改成 mysql
DB_HOST=mysql
```


## 啟動

```cmd
cd /laradock
docker-compose up -d nginx mysql redis workspace
```

## 功能
### 前端：
顯示商店各類資訊 <br>
127.0.0.1/<br>
127.0.0.1/about<br>
127.0.0.1/product<br>
127.0.0.1/store<br>
### 後端：
需註冊成會員才能進行後端操作<br>
127.0.0.1/login<br>
127.0.0.1/register<br>
可隨時更改店家網頁資訊<br>
127.0.0.1/backend<br>
127.0.0.1/admin/website<br>
127.0.0.1/admin/home<br>
127.0.0.1/admin/about<br>
127.0.0.1/admin/product<br>
127.0.0.1/admin/store<br>



