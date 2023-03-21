# А.pw
[А.pw](а.pw) - сервис сокращения ссылок. 


# Установка

1. Распакуйте smthindex.php и redir.php в папку с сайтом.
2. Настройте реврайт:
```nginx
  location / {
    rewrite ^(.*)$ /redir.php?lnk=$request_uri last;
  }
```
3. Готово

# API

Создать ссылку: /smthindex.php?key=KEY&link=https://example.org
Ответ:
```json 
{"success":1,"lnk":"10ea"}
```

Если ссылка УЖЕ существует, то будет выдан её старый id.
