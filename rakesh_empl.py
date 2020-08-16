import mysql.connector
#from mysql.connector import *
con=mysql.connector.connect(host='18.219.99.141',database='db1',user="root",password='India12345')
c=con.cursor()
def create_table ():
    c.execute("create table employee(Id varchar(10),name varchar(20),address varchar(255),city varchar())")
def insert_table():
    c.execute("insert into employee values('AI01','rakesh kn','third block','banglore)")
    c.execute("insert into employee values('AI02','gagan','second block','banglore)")
    c.execute("insert into employee values('AI03','pavan','first block','banglore)")
    c.execute("insert into employee values('AI04','jeevan','fouth main','banglore)")
    c.execute("insert into employee values('AI05','manoj','first main','banglore)")
    con.commit()
def select_table():
    c.execute('select * from employee')



    data=c.fetchall()
    for row in data:


        print(row)
select_table()




c.close()
con.close()


#CREATE TABLE Persons
#("employeeID int, LastName varchar(255),FirstName varchar(255),Address varchar(255),City varchar(255))