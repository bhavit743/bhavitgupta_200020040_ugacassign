import sqlite3
from sqlite3 import Error
import connection as con
import createtable

def create_user(conn, user):

    sql = ''' INSERT INTO userinfo(name,password)
              VALUES(?,?) '''
    cur = conn.cursor()
    cur.execute(sql, user)
    conn.commit()
    return cur.lastrowid
    print("Registration Successful")

def delete_user(conn, userid):
    sql = 'DELETE FROM userinfo WHERE userid=?'
    cur = conn.cursor()
    cur.execute(sql, (userid,))
    conn.commit()

def main():
    database = 'loginsqlite.db'

    conn = con.create_connection(database)
    
    with conn:
        """delete_user(conn, 6)"""
        user=('','')
        user_userid = create_user(conn, user)
   


if __name__ == '__main__':
    main()