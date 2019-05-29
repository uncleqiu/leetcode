SELECT
	P .FirstName,
	P .LastName,
	A .City,
	A . STATE
FROM
	Person P
LEFT JOIN Address A ON P .PersonId = A .PersonId;