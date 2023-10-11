INSERT	INTO	[Persons] ( [Name], [LastName], [NationalCode], [PhoneNumber], [Email], [BirthDate] )
VALUES
(
	N''		-- Name - nvarchar(150)
	, N''		-- LastName - nvarchar(150)
	, N''		-- NationalCode - nvarchar(10)
	, ''		-- PhoneNumber - varchar(11)
	, ''		-- Email - varchar(50)
	, GETDATE()	-- BirthDate - datetime
) ;
