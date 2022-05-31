-- データがないときにこれが初めて読み込まれる
-- 一行一行terminalにも書くことができる : 

DROP SCHEMA IF EXISTS posseapp; 
-- ↑posseappがあれば壊す
CREATE SCHEMA posseapp;
-- ↑posseappを作る
USE posseapp;
-- posseappに入る
DROP TABLE IF EXISTS studydata;

-- 全体のデータ--
CREATE TABLE studydata(
  studied_on DATE NOT NULL,
  contents VARCHAR(255) NOT NULL,
  languages VARCHAR(255) NOT NULL,
  timelength INT NOT NULL
);

INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-04","N予備校","CSS",4);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-06","N予備校","HTML",5);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-04","N予備校","HTML",3);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-07","ドットインストール","CSS",4);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-08","ドットインストール","JavaScript",2);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-09","POSSE課題","PHP",2);
INSERT INTO studydata (studied_on,contents,languages,timelength) VALUES ("2021-10-10","POSSE課題","PHP",8);

-- 言語のマスタ
DROP TABLE IF EXISTS languages;
CREATE TABLE languages(
  language VARCHAR(255) NOT NULL,
  lang_color VARCHAR(10) NOT NULL
);

INSERT INTO languages (language, lang_color) VALUES ("JavaScript", "1854EF");
INSERT INTO languages (language, lang_color) VALUES ("CSS", "0F71BD");
INSERT INTO languages (language, lang_color) VALUES ("HTML", "3DCEFE");
INSERT INTO languages (language, lang_color) VALUES ("Laravel", "B39FF2");
INSERT INTO languages (language, lang_color) VALUES ("SQL", "6D46EC");
INSERT INTO languages (language, lang_color) VALUES ("SHELL", "4A17F0");
INSERT INTO languages (language, lang_color) VALUES ("情報システム基礎知識(その他)", "3104C0");

-- 教材のマスタ
DROP TABLE IF EXISTS contents;
CREATE TABLE contents(
  content VARCHAR(255) NOT NULL,
  content_color VARCHAR(10) NOT NULL
);

INSERT INTO contents (content, content_color) VALUES ("POSSE課題", "20BDDE");
INSERT INTO contents (content, content_color) VALUES ("N予備校", "0F71BD");
INSERT INTO contents (content, content_color) VALUES ("ドットインストール", "1854EF");