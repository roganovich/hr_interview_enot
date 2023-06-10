# Тех. задание:
- Имеется система настроек пользователя
## Задача: Реализовать систему подтверждения смены конкретной настройки пользователя 
- по коду из смс / email / telegram 
- с возможностью выбора пользователем другого метода
-- Какие вы выделили бы слои, абстракции, таблицы?
-- Реализуйте данную схему без интеграции конкретных сервисов / ORM / прочее на уровне интерфейсов / контроллеров

### Описание слоев
- В слой предметной области я бы выделил сущности пользователя и настройку. (Domain)
- В инфраструктурный слой вынес бы отправку кода и сохранение данных из объекта настройки пользователя. (Infrastructure)
- В слой приложения вынес бы генерирования кода. (Aplication)
- Выбор пользователем способа получения кода сделал бы в слое интерфейса пользователя. (User Interface)

### Пример таблицы
#### Пользователи
```
  CREATE TABLE [IF NOT EXISTS] users 
  id setial PRIMARY KEY,
  name varchar,
  email varchar,
```
#### Настройки
```
  CREATE TABLE [IF NOT EXISTS] users_settings 
  id setial PRIMARY KEY,
  name varchar,
  value test,
  user_id integer,
```
#### Ключик
```
alter table users_settings add constraint fk_users_settings_user_id foreign key (user_id) REFERENCES users (id);
```

### Проверка задания:
```
php ./vendor/bin/phpunit tests
```

