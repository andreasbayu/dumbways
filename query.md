# Beberapa Query MySQL

- Contoh Insert Data

```sql
    INSERT INTO category_tb (name) VALUES ("Programming"),("GNU/Linux");
```

- Join 3 table

```sql
    SELECT b.id, b.name, b.category_id, b.writer_id, b.publication_year, b.img, c.id, c.name, w.id, w.name FROM book_tb b JOIN category_tb c ON b.category_id = c.id JOIN writer_tb w ON b.writer_id = w.id; 
```
