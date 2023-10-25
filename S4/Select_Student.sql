--  لیست دانش آموزان پایه یازدهم
SELECT
	[S].[Id]
	, [S].[NationalCode]
	, [S].[Name]
	, [S].[Lastname]
	, [S].[Fathername]
	, [S].[Grade]
	, [S].[Address]
	, [S].[Mobile]
FROM
	[Students] AS [S]
WHERE
	[S].[Grade] = '11' ;