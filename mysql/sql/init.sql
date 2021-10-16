-- データがないときにこれが初めて読み込まれる
-- 一行一行terminalにも書くことができる : 

DROP SCHEMA IF EXISTS posseapp; 
-- ↑posseappがあれば壊す
CREATE SCHEMA posseapp;
-- ↑posseappを作る
USE posseapp;
-- posseappに入る
DROP TABLE IF EXISTS studydata;

CREATE TABLE studydata
(
  studiedon VARCHAR(10) NOT NULL,
  contents VARCHAR(255) NOT NULL,
  languages VARCHAR(255) NOT NULL,
  timelength INT NOT NULL
);

-- table作る、columnの設定

INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-04","N予備校","HTML",3);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-05","N予備校","CSS",4);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-06","N予備校","HTML",5);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-07","ドットインストール","CSS",4);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-08","ドットインストール","JavaScript",2);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-09","POSSE課題","PHP",2);
INSERT INTO studydata (studiedon,contents,languages,timelength) VALUES ("2021-10-10","POSSE課題","PHP",8);