USE DfLessonDb;

SELECT * FROM Blog
WHERE Blog.BlogId = 1 or Blog.BlogId = 11
Update Blog Set Blog.Description = 'New data'
WHERE Blog.BlogId = 1

SELECT * FROM Blog
WHERE Blog.BlogId = 1 or Blog.BlogId = 11

CREATE TABLE TestDB(

	id int identity(1,1) not null constraint PK_ID primary key,
	descriptions nvarchar(100) not null,
	testid int not null
);
GO


ALTER TABLE [dbo].TestDB  WITH CHECK ADD FOREIGN KEY(testid)
REFERENCES [dbo].SecondTestDb (id)
ON UPDATE CASCADE
ON DELETE CASCADE
GO

ALTER TABLE TestDB
ADD  CONSTRAINT DF_BlogUser_TestDB_Unique  UNIQUE (testid)
GO


CREATE TABLE SecondTestDb(

	id int identity(1,1) not null constraint PK_SecondId primary key,
	descriptions nvarchar(100) not null,
	testid int not null
);
GO

INSERT INTO TestDB(descriptions,testid) 
VALUES
('Old text',1),
('Old text',2),
('Old text',3),
('Old text',4)
GO



select * from TestDB


INSERT INTO SecondTestDb(descriptions,testid) 
VALUES
('New text',1),
('New text',2),
('New text',3),
('New text',4)
GO


UPDATE TestDB SET descriptions = SecondTestDb.descriptions
FROM TestDB INNER JOIN SecondTestDb ON TestDB.testid = SecondTestDb.id
WHERE SecondTestDb.testid >= 2

SELECT * FROM TestDB

DELETE FROM TestDB
WHERE TestDB.descriptions = (select TOP(1) SecondTestDb.descriptions from SecondTestDb) 
SELECT * FROM TestDB

DELETE TestDB
FROM TestDB 
inner join SecondTestDb on TestDB.testid = SecondTestDb.id
WHERE TestDB.id = 1


DELETE TestDB 
FROM TestDB
inner join SecondTestDb on TestDB.testid = SecondTestDb.id
where TestDB.testid = SecondTestDb.id

SELECT * FROM TestDB
SELECT * FROM SecondTestDb


TRUNCATE TABLE TestDB
TRUNCATE TABLE SecondTestDb


