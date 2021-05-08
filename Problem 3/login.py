import sqlite3
from sqlite3 import Error
import connection as con
import createtable
import addtotable

def select_user_by_name(conn, name, password):
    
    cur = conn.cursor()
    cur.execute("SELECT * FROM userinfo WHERE name=?", (name,))

    rows = cur.fetchone()
    namerow = rows[1]
    passrow = rows[2]
    if(name != namerow):
        print("User doesn't exist")
    elif(passrow == password):
        print("Login Successful")
    else:
        print("Incorrect name or password")
    
    

def main():
    database = 'loginsqlite.db'

    conn = con.create_connection(database)
    with conn:
        print("Welcome to Our Login Portal!")
        inputname = input("Name: " )
        inputpass = input("Password: ")
        select_user_by_name(conn, inputname, inputpass)



if __name__ == '__main__':
    main()