import sqlite3
from sqlite3 import Error
import connection as con

def create_table(conn, create_table_sql):
    
    try:
        c = conn.cursor()
        c.execute(create_table_sql)
    except Error as e:
        print(e)

def main():
    database = 'loginsqlite.db'

    sql_create_userinfo_table = """ CREATE TABLE IF NOT EXISTS userinfo (
                                        userid integer PRIMARY KEY,
                                        name text NOT NULL,
                                        password text NOT NULL
                                    ); """

    conn = con.create_connection(database)

    if conn is not None:
        create_table(conn, sql_create_userinfo_table)
    else:
        print("Error! cannot create the database connection.")


if __name__ == '__main__':
    main()
