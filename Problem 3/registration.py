import sqlite3
from sqlite3 import Error
import connection as con
import createtable
import addtotable as reg

def main():
    database = 'loginsqlite.db'

    conn = con.create_connection(database)
    with conn:
        print("Welcome to our portal! Please register yourself")
        name = input("Name: ")
        password = input("Password: ")
        user=(name,password)
        user_userid = reg.create_user(conn, user)
        

if __name__ == '__main__':
    main()