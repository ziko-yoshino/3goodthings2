INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('test1','test1@test.jp',30,'test', sysdate());

INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('test2','test2@test.jp',40,'test', sysdate());

INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('test4','test4@test.jp',40,'test', sysdate());

INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES(:name,:email,:age,:naiyou,sysdate());

SELECT*FROM gs_an_table;
SELECT id,name,indate FROM gs_an_table;

SELECT*FROM gs_an_table WHERE id=1;