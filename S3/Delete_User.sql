--Soft Delete
UPDATE [Users] SET [IsDeleted]=1 WHERE [Id]=1

--Hard Delete
DELETE [Users] WHERE [Id]=1