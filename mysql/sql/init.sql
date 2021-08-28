-- データがないときにこれが初めて読み込まれる
-- 一行一行terminalにも書くことができる : 

DROP SCHEMA IF EXISTS quizy; 
-- ↑quizyがあれば壊す
CREATE SCHEMA quizy;
-- ↑quizyを作る
USE quizy;
-- quizyに入る
DROP TABLE IF EXISTS questions_tokyo;
-- table壊す

CREATE TABLE questions_tokyo (
  id INT NOT NULL PRIMARY KEY,
  choice1 VARCHAR(255) NOT NULL,
  choice2 VARCHAR(255) NOT NULL,
  choice3 VARCHAR(255) NOT NULL
);
-- table作る、columnの設定

INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('1', 'たかなわ', 'たかわ', 'こうわ');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('2', 'かめいど', 'かめと', 'かめど');