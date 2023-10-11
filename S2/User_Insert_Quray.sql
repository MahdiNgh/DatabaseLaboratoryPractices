INSERT INTO [Users] ( [PersonId], [UserName], [Password], [SequrityKey], [RegisterDate], [IsActive] )
VALUES
(
	0		-- PersonId - int
	, ''		-- UserName - varchar(150)
	, ''		-- Password - varchar(250)
	, ''		-- SequrityKey - varchar(1000)
	, GETDATE()	-- RegisterDate - datetime
	, 1		-- IsActive - bit
);
