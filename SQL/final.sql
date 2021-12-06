USE DfLessonDb;

CREATE TABLE NewTableTest(
	id int identity(1,1) not null constraint PK_NewId primary key,
	descriptions nvarchar(100) not null,
	testid int not null

);
GO


CREATE TABLE SecondNewTableTest(
	id int identity(1,1) not null constraint PK_SecondNewId primary key,
	descriptions nvarchar(100) not null,
	testid int not null

);
GO



INSERT INTO NewTableTest (descriptions,testid) 
VALUES
('text1',1),
('text2',2),
('text3',3),
('text4',4),
('text5',5),
('text6',6)
GO



INSERT INTO SecondNewTableTest (descriptions,testid) 
VALUES
('text1',1),
('text1',2),
('text1',1),
('text1',2),
('text1',1)
GO

SELECT * FROM NewTableTest
SELECT * FROM SecondNewTableTest

SELECT COUNT(*) FROM NewTableTest
FULL JOIN  SecondNewTableTest ON SecondNewTableTest.testid = NewTableTest.id

WITH A AS (SELECT * FROM NewTableTest),
B AS (SELECT A.id FROM A)
SELECT COUNT(*) FROM B

SELECT TOP 1 * from NewTableTest
WHERE id =  (SELECT TOP 1 SecondNewTableTest.testid FROM SecondNewTableTest 
ORDER BY SecondNewTableTest.testid DESC )

SELECT SecondNewTableTest.testid, SUM(SecondNewTableTest.testid) 
OVER(PARTITION BY SecondNewTableTest.testid
ORDER BY SecondNewTableTest.testid)
 FROM NewTableTest
JOIN SecondNewTableTest ON SecondNewTableTest.testid = NewTableTest.id
WHERE SecondNewTableTest.testid = 1 
or SecondNewTableTest.testid = 2 
or SecondNewTableTest.testid = 3
GROUP BY SecondNewTableTest.testid


INSERT INTO SecondNewTableTest(SecondNewTableTest.descriptions, SecondNewTableTest.testid)
VALUES 
('TEXT5',5),
('TEXT6',6)
GO

SELECT * FROM SecondNewTableTest

UPDATE TestDB SET descriptions = SecondTestDb.descriptions
FROM TestDB INNER JOIN SecondTestDb ON TestDB.testid = SecondTestDb.id
WHERE SecondTestDb.testid >= 2

UPDATE SecondNewTableTest SET SecondNewTableTest.descriptions = NewTableTest.id
FROM SecondNewTableTest INNER JOIN NewTableTest ON 
NewTableTest.id = SecondNewTableTest.testid

SELECT * FROM SecondNewTableTest

DELETE SecondNewTableTest FROM SecondNewTableTest 
INNER JOIN NewTableTest ON SecondNewTableTest.testid = NewTableTest.id
WHERE NewTableTest.id < 3


DELETE FROM NewTableTest
WHERE testid = 7

CREATE TABLE SecondTestDb(

	
);
GO