# Тех. задание:
- Имеется система настроек пользователя
## Задача: Реализовать систему подтверждения смены конкретной настройки пользователя 
- по коду из смс / email / telegram 
- с возможностью выбора пользователем другого метода
- Какие вы выделили бы слои, абстракции, таблицы?
- Реализуйте данную схему без интеграции конкретных сервисов / ORM / прочее на уровне интерфейсов / контроллеров
### Описание слоев
- В слой предметной области я бы выделил сущности пользователя и настройку. (Domain)
- В инфраструктурный слой вынес бы отправку кода и сохранение данных из объекта настройки пользователя. (Infrastructure)
- В слой приложения вынес бы генерирования кода. (Application)
- Выбор пользователем способа получения кода сделал бы в слое интерфейса пользователя. (User Interface)

### Пример таблицы
#### Пользователи
```
  CREATE TABLE IF NOT EXISTS users ( 
  id SERIAL PRIMARY KEY,
  name  VARCHAR(255) NOT NULL,
  email VARCHAR(255)
  )
```
#### Настройки
```
  CREATE TABLE IF NOT EXISTS users_settings  (
  id SERIAL PRIMARY KEY,
  name  VARCHAR(255) NOT NULL,
  value TEST,
  user_id INTEGER,
  FOREIGN KEY (user_id) REFERENCES users (id)
  )
```
### Проверка задания:
```
docker-compose up --build -d
docker exec -it enot_php bash 
php ./vendor/bin/phpunit tests
```