------------------------------
-- DROP / TRUNCATE
------------------------------
DROP TABLE table_name;      -- delete entire table
TRUNCATE TABLE table_name;  -- delete the DATA in table

------------------------------
-- DELETE
------------------------------
DELETE FROM table_name; -- WHERE condition (ex: WHERE name="bob");

------------------------------
-- ALTER TABLE
------------------------------
ALTER TABLE table_name
ADD column_name datatype;

ALTER TABLE table_name
DROP COLUMN column_name;
--ALTER COLUMN column_name datatype;
