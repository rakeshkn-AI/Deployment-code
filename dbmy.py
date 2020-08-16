import mysql.connector
#from mysql.connector import *
con=mysql.connector.connect(host='18.219.99.141',database='db1',user="root",password='India12345')
c=con.cursor()
c.execute("select database();")
d=c.fetchall()
print("database name:",d)
c.close()
con.close()