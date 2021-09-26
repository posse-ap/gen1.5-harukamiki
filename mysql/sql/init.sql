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
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('3', 'こうじまち','かゆまち', 'おかちまち');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('4', 'おなりもん','おかどもん', 'ごせいもん');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('5', 'とどろき','たたりき', 'たたら');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('6', 'しゃくじい','せきこうい', 'いじい');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('7', 'ぞうしき','ざっしき', 'ざっしょく');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('8', 'おかちまち','ごしろちょう', 'みとちょう');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('9', 'ししぼね','ろっこつ', 'しこね');
INSERT INTO `questions_tokyo` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('10', 'こぐれ','こしゃく', 'こばく');


DROP TABLE IF EXISTS questions_hiroshima;
-- table壊す


-- ---------------------------------------------------------------
CREATE TABLE questions_hiroshima (
  id INT NOT NULL PRIMARY KEY,
  choice1 VARCHAR(255) NOT NULL,
  choice2 VARCHAR(255) NOT NULL,
  choice3 VARCHAR(255) NOT NULL
);

INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('1', 'むかいなだ', 'むきひら','むこうひら');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('2', 'みつぎ','おしらべ', 'みよし');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('3', 'かなやま','きやま', 'ぎんざん');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('4', 'とよひ','としか', 'とよか');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('5', 'いしぐろ','いしあぜ', 'しゃくぜ');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('6', 'みよし','みつぎ', 'みかた');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('7', 'うずい', 'もみち', 'くもおり');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('8', 'すもも','でこぽん', 'ぽんかん');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('9', 'おおちごとうげ', 'おおちごえとうげ', 'おうちごとうげ');
INSERT INTO `questions_hiroshima` (`id`, `choice1`, `choice2`, `choice3`) VALUES ('10', 'よおろほよばら','てっぽよばら', 'ていぼよはら');