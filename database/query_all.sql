SELECT makes.name as makes, make_years.year,
       models.name as model
FROM models
JOIN make_years ON models.makeyear_id = make_years.id
JOIN makes ON make_years.make_id = makes.id
ORDER BY makes.name, make_years.year, models.name;