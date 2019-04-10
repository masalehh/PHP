SELECT con.compaign_id compaignID,
       com.name Name,
       SUM(con.revenue) totalRevenue,
       count(con.lander_id) landerCount
FROM conversions CON
JOIN compaigns com on(con.compaign_id = com.id)
GROUP BY con.compaign_id
