<pre class="yellow_page">
1  <span class="sql_construct">WITH RECURSIVE</span> cte (id, post, manager_id, LevelUser)
2  <span class="sql_construct">AS</span>
3  (
4  -- Находим якорь рекурсии
5      <span class="sql_construct">SELECT</span> id, post, manager_id, 0 <span class="sql_construct">AS</span> LevelUser
6        <span class="sql_construct">FROM</span> users
7          <span class="sql_construct">WHERE</span> manager_id IS NULL
8      <span class="sql_construct">UNION ALL</span>
9  -- Делаем объединение с cte
10     <span class="sql_construct">SELECT</span> t2.id, t2.post, t2.manager_id, t1.LevelUser + 1
11       <span class="sql_construct">FROM</span> cte AS t1
12     <span class="sql_construct">JOIN</span> users AS t2
13       <span class="sql_construct">ON</span> t2.manager_id = t1.id
14 )
15 <span class="sql_construct">SELECT</span> <span style="vertical-align: sub;">*</span>
16   <span class="sql_construct">FROM</span> cte
17 -- Получить начальников отделов
18 -- WHERE LevelUser = 1
19 <span class="sql_construct">ORDER BY</span> LevelUser;
</pre>
