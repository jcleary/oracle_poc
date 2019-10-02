To build
```bash
docker-compose build
```

To run the app
```bash
docker-compose run
```

To create the table needed by the app, once the stack is up run the following
```bash
docker-compose run php sqlplus system/oracle@oracle
```

Then run this sql to create and populate table for the app
```sql
create table users( name VARCHAR2(100), id NUMBER(5) PRIMARY KEY);
insert into users (id, name) values (10, 'Attila');
insert into users (id, name) values (20, 'John');
```
