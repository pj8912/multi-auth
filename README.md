# multi-auth
Implement Multiple Login/Signup methods with `MySQL` database in PHP

- Username and Password
- Google
- Github

---
### Install

```
composer require jp/multi-auth
```

---
### Configuration

#### .env file
Create .`env` file in root, setup these variables and the respective values

 - `DB_HOST` database hostname
 - `DB_USERNAME` database username
 - `DB_PWD` password
 - `DB_NAME` databasename


These are accessible as `$_ENV` superglobals

---
