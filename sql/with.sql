WITH RECURSIVE cte (id, post, manager_id, LevelUser)
AS
(
-- Находим якорь рекурсии
	SELECT id, post, manager_id, 0 AS LevelUser
	FROM users WHERE manager_id IS NULL
	UNION ALL
-- Делаем объединение с cte
	SELECT t2.id, t2.post, t2.manager_id, t1.LevelUser + 1
	FROM cte AS t1
	JOIN users AS t2
		ON t2.manager_id = t1.id
)
SELECT * FROM cte
-- Получить начальников отделов
-- WHERE LevelUser = 1
ORDER BY LevelUser;
