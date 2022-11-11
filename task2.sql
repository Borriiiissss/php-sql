-- Задача №2: создать БД, состоящую из одной таблицы 
-- (информация об одногруппниках) с четырьмя полями (добавить поле «Адрес»): 
-- id, name, age, address.
-- create
CREATE TABLE CLASSMATES (
  empId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO CLASSMATES VALUES (0001, 'Clark', 21, 'Кировобад');
INSERT INTO CLASSMATES VALUES (0002, 'Dave', 59, 'Мюнхен');
INSERT INTO CLASSMATES VALUES (0003, 'Ava', 100, 'Магадан');

-- fetch 
SELECT * FROM CLASSMATES WHERE age > 18;
