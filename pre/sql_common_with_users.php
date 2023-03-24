<pre class="yellow_page">
<span class="sql_construct">WITH</span> CTE_users
  <span class="sql_construct">AS</span>
  (
    <span class="sql_construct">SELECT</span> <span style="vertical-align: sub;">*</span> <span class="sql_construct">FROM</span> users
  )
<span class="sql_construct">SELECT</span> <span style="vertical-align: sub;">*</span> <span class="sql_construct">FROM</span> CTE_users;
</pre>
