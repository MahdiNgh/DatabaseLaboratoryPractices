INSERT	INTO	[Messages] ( [SenderUserId], [ReciverUserId], [Text], [CreatedDate] )
VALUES
(
	0		-- SenderUserId - int
	, 0		-- ReciverUserId - int
	, N''		-- Text - nvarchar(max)
	, GETDATE()	-- CreatedDate - datetime
) ;
