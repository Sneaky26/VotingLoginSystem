# SQL Basics

---

## 1. What is SQL?

SQL is the language used to interact with databases.
- **CREATE** — make tables
- **INSERT** — add data
- **SELECT** — get data
- **UPDATE** — edit data
- **DELETE** — remove data

---

## 2. CREATE DATABASE & TABLE

```sql
-- create a database
CREATE DATABASE votingsystem;

-- use the database
USE votingsystem;

-- create a table
CREATE TABLE voterinfo (
    voterid VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(50)
);
```

---

## 3. Data Types

| Type | Use For | Example |
|---|---|---|
| `INT` | whole numbers | age, quantity |
| `VARCHAR(n)` | text with max length | name, password |
| `TEXT` | long text | descriptions |
| `BOOLEAN` | true/false | isActive |
| `DATE` | date only | 2024-01-01 |
| `DATETIME` | date and time | 2024-01-01 12:00:00 |

---

## 4. PRIMARY KEY & AUTO INCREMENT

```sql
CREATE TABLE voterinfo (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- unique id, auto increases
    voterid VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(50)
);
```
> `PRIMARY KEY` = unique identifier for each row
> `AUTO_INCREMENT` = automatically adds 1, 2, 3...

---

## 5. INSERT (add data)

```sql
-- insert all columns
INSERT INTO voterinfo VALUES('001', 'john', 'pass123');

-- insert specific columns
INSERT INTO voterinfo (voterid, username, password) 
VALUES ('001', 'john', 'pass123');

-- insert multiple rows
INSERT INTO voterinfo (voterid, username, password) VALUES
('001', 'john', 'pass123'),
('002', 'jane', 'pass456'),
('003', 'bob',  'pass789');
```

---

## 6. SELECT (get data)

```sql
-- get everything
SELECT * FROM voterinfo;

-- get specific columns
SELECT username, password FROM voterinfo;

-- get with condition
SELECT * FROM voterinfo WHERE voterid = '001';

-- get with multiple conditions
SELECT * FROM voterinfo 
WHERE username = 'john' AND password = 'pass123';

-- get with OR
SELECT * FROM voterinfo 
WHERE username = 'john' OR username = 'jane';
```

---

## 7. WHERE Operators

```sql
WHERE age = 20       -- equal
WHERE age != 20      -- not equal
WHERE age > 18       -- greater than
WHERE age < 18       -- less than
WHERE age >= 18      -- greater than or equal
WHERE age <= 18      -- less than or equal
WHERE name LIKE 'J%' -- starts with J
WHERE name LIKE '%n' -- ends with n
WHERE age BETWEEN 18 AND 30  -- between range
```

---

## 8. UPDATE (edit data)

```sql
-- update one column
UPDATE voterinfo 
SET password = 'newpass' 
WHERE voterid = '001';

-- update multiple columns
UPDATE voterinfo 
SET username = 'johnny', password = 'newpass' 
WHERE voterid = '001';
```
> ⚠️ Always use `WHERE` or it updates ALL rows!

---

## 9. DELETE (remove data)

```sql
-- delete one row
DELETE FROM voterinfo WHERE voterid = '001';

-- delete all rows (careful!)
DELETE FROM voterinfo;
```
> ⚠️ Always use `WHERE` or it deletes EVERYTHING!

---

## 10. ORDER BY (sorting)

```sql
-- sort A to Z
SELECT * FROM voterinfo ORDER BY username ASC;

-- sort Z to A
SELECT * FROM voterinfo ORDER BY username DESC;

-- sort by number
SELECT * FROM voterinfo ORDER BY id ASC;
```

---

## 11. LIMIT (how many rows to get)

```sql
-- get only 5 rows
SELECT * FROM voterinfo LIMIT 5;

-- get 5 rows starting from row 10
SELECT * FROM voterinfo LIMIT 5 OFFSET 10;
```

---

## 12. COUNT (how many rows)

```sql
-- count all rows
SELECT COUNT(*) FROM voterinfo;

-- count with condition
SELECT COUNT(*) FROM voterinfo WHERE username = 'john';
```

---

## 13. ALTER TABLE (modify table)

```sql
-- add a new column
ALTER TABLE voterinfo ADD email VARCHAR(100);

-- remove a column
ALTER TABLE voterinfo DROP COLUMN email;

-- change column type
ALTER TABLE voterinfo MODIFY password VARCHAR(255);
```

---

## 14. DROP (delete table or database)

```sql
-- delete a table
DROP TABLE voterinfo;

-- delete a database
DROP DATABASE votingsystem;
```
> ⚠️ Cannot be undone — be very careful!

---

## 15. SHOW & DESCRIBE (inspect)

```sql
-- show all databases
SHOW DATABASES;

-- show all tables in current database
SHOW TABLES;

-- show columns of a table
DESCRIBE voterinfo;
```

---

## 16. JOIN (combine tables)

```sql
-- say you have voterinfo and votes tables
SELECT voterinfo.username, votes.candidate
FROM voterinfo
JOIN votes ON voterinfo.voterid = votes.voterid;
```
> Useful when you have related data split across tables

---

## 17. Common Mistakes

| Wrong | Correct |
|---|---|
| `UPDATE FROM table` | `UPDATE table` (no FROM) |
| `DELETE table` | `DELETE FROM table` |
| forgetting `WHERE` on UPDATE/DELETE | always use `WHERE` |
| `SELECT FROM table` | `SELECT * FROM table` |
| string without quotes `WHERE id = 001` | `WHERE id = '001'` |

---

## 18. Quick Cheat Sheet

```sql
-- database
CREATE DATABASE mydb;
USE mydb;

-- table
CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50));

-- CRUD
SELECT * FROM users;                                  -- Read
INSERT INTO users (name) VALUES ('John');             -- Create
UPDATE users SET name = 'Jane' WHERE id = 1;         -- Update
DELETE FROM users WHERE id = 1;                       -- Delete

-- filter & sort
SELECT * FROM users WHERE name = 'John';
SELECT * FROM users ORDER BY name ASC;
SELECT * FROM users LIMIT 10;
```
