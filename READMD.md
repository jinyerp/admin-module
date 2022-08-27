# 관리자 back-office
jinyERP 관리자 모듈입니다. 모듈을 설치하면 back-office 기능을 사용할 수 있습니다.

> admin 기능을 사용하기 위해서는 먼저 `인증모듈`이 설치되어 있어야 합니다.

## 설치
모듈을 설치합니다.

```
php atrisan module:geturl https://github.com/jinyerp/admin-module.git
```

## 미들웨어

관리자 페이지로 접근을 하기위해서는 2개의 미들웨어를 통과해야 합니다.
* admin
* super

super 관리자는 회원의 `utype`이 SUPER 이어야 합니다.


