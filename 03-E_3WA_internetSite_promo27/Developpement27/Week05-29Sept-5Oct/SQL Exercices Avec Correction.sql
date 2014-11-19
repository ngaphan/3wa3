-------------------------------------------------------------------------
-- les numéros et noms des départements par ordre alphabétique
-------------------------------------------------------------------------

SELECT number, name
FROM departement
ORDER BY name


-------------------------------------------------------------------------
-- les départements dont le numéro est entre 1 et 15
-------------------------------------------------------------------------

SELECT *
FROM departement
WHERE number >= 1 AND number <= 15

-- ou

SELECT *
FROM departement
WHERE number BETWEEN 1 AND 15

-------------------------------------------------------------------------
-- le nombre total de villes en france
-------------------------------------------------------------------------

SELECT count(*)
FROM city

-------------------------------------------------------------------------
-- le nombre de départements en Aquitaine
-------------------------------------------------------------------------

SELECT count(*)
FROM departement AS d, region AS r
WHERE d.region_id = r.number AND r.name = "Aquitaine"

-------------------------------------------------------------------------
-- le nombre de villes en France de plus de 200 000 habitants
-------------------------------------------------------------------------

SELECT count(*)
FROM city
WHERE population >= 200000

-------------------------------------------------------------------------
-- la superficie totale de la Gironde
-------------------------------------------------------------------------

SELECT sum(c.surface)
FROM city AS c, departement AS d
WHERE c.department = d.number AND d.name = "Gironde"

-------------------------------------------------------------------------
-- le département le plus vaste en France
-------------------------------------------------------------------------

SELECT d.name
FROM city AS c, departement AS d
WHERE c.department = d.number
GROUP BY c.department
ORDER BY sum(c.surface) DESC
LIMIT 0, 1

-------------------------------------------------------------------------
-- la superficie du département le plus vaste de france
-------------------------------------------------------------------------

SELECT sum(c.surface)
FROM city AS c, departement AS d
WHERE c.department = d.number
GROUP BY c.department
ORDER BY sum(c.surface) DESC
LIMIT 0, 1

-------------------------------------------------------------------------
-- le plus vaste département d'Ile-de-France
-------------------------------------------------------------------------

SELECT d.name
FROM city AS c, departement AS d, region AS r
WHERE c.department = d.number AND d.region_id = r.number AND r.name = "Ile de France"
GROUP BY c.department
ORDER BY sum(c.surface) DESC
LIMIT 0, 1

-------------------------------------------------------------------------
-- la région ayant le plus de villes, sa ville la plus vaste
-------------------------------------------------------------------------

SELECT c.name
FROM city AS c, departement AS d
WHERE c.department = d.number
AND d.region_id = (
  SELECT r.number
  FROM city AS c, departement AS d, region AS r
  WHERE c.department = d.number AND d.region_id = r.number
  GROUP BY r.number
  ORDER BY count(*) DESC
  LIMIT 0, 1
)
ORDER BY c.surface DESC
LIMIT 0, 1

-------------------------------------------------------------------------
-- la région ayant le plus de villes, sa ville la plus peuplée
-------------------------------------------------------------------------

SELECT c.name
FROM city AS c, departement AS d
WHERE c.department = d.number
AND d.region_id = (
  SELECT r.number
  FROM city AS c, departement AS d, region AS r
  WHERE c.department = d.number AND d.region_id = r.number
  GROUP BY r.number
  ORDER BY count(*) DESC
  LIMIT 0, 1
)
ORDER BY c.population DESC
LIMIT 0, 1


-------------------------------------------------------------------------
-- les étudiants nés avant 1940
-------------------------------------------------------------------------

SELECT *
FROM student
WHERE birthday < '1940-01-01'

-------------------------------------------------------------------------
-- le nombre d'étudiants de plus de 70 ans?
-------------------------------------------------------------------------

SELECT *
FROM student
WHERE year(CURRENT_DATE) - year(birthday) > 70

-------------------------------------------------------------------------
-- la ville rassemblant le plus d'étudiants
-------------------------------------------------------------------------

SELECT city_id, count(*)
FROM student
GROUP BY city_id
ORDER BY count(*) desc

-------------------------------------------------------------------------
-- moyenne d'habitant par km² pour chaque région
-------------------------------------------------------------------------

SELECT r.name, (sum(c.population) / (sum(c.surface) / 100)) AS density
FROM city AS c, departement AS d, region AS r
WHERE c.department = d.number AND d.region_id = r.number
GROUP BY r.number
ORDER BY density DESC