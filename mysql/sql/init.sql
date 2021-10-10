-- データがないときにこれが初めて読み込まれる
-- 一行一行terminalにも書くことができる : 

DROP SCHEMA IF EXISTS posseapp; 
-- ↑posseappがあれば壊す
CREATE SCHEMA posseapp;
-- ↑posseappを作る
USE posseapp;
-- posseappに入る
DROP TABLE IF EXISTS studydata;


-- 必要なテーブル
-- 　日付
-- 学習コンテンツ
-- 学習言語
-- 学習時間
-- 　勉強時間の合計

-- table壊す

CREATE TABLE studydata (
  id INT AUTO_INCREMENT,
  date VARCHAR(10) NOT NULL,
  contents VARCHAR(255) NOT NULL,
  languages VARCHAR(255) NOT NULL,
  timelength INT NOT NULL
);

-- table作る、columnの設定

INSERT INTO `studydata` (`date`, `contents`, `languages`,'timelength') VALUES ('2021-10-04','N予備校','HTML',5);
INSERT INTO `studydata` (`date`, `contents`, `languages`,'timelength') VALUES ('2021-10-05','ドットインストール','CSS',3);
INSERT INTO `studydata` (`date`, `contents`, `languages`,'timelength') VALUES ('2021-10-06','POSSE課題','PHP','2');