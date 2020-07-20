import mysql.connector
from mysql.connector import Error
from faker import Faker


def populate_student_table():

    mycursor = connection.cursor()
    for i in range(20):
        name = faker.name()
        phone = faker.phone_number()
        email = faker.email()
        sql_command = (
            "INSERT INTO studentcases (FullName, PhoneNumber, UniversityEmail) "
            "VALUES ('{}', '{}', '{}')".format(name, phone, email)
        )
        try:
            mycursor.execute(sql_command)
        except Error as e:
            print(e)

    connection.commit()
    print(mycursor.rowcount, "record inserted.")

try:
    connection = mysql.connector.connect(user='ba1b3bebb866bc', password='bc392e11', host='us-cdbr-east-02.cleardb.com',
                                         database='heroku_c224005b36bf596')
    if connection.is_connected():
        db_Info = connection.get_server_info()
        print("Connected to MySQL Server version ", db_Info)
        cursor = connection.cursor()
        cursor.execute("select database();")
        record = cursor.fetchone()
        print("You're connected to database: ", record)

    faker = Faker()
    populate_student_table()

except Error as e:
    print("Error while connecting to MySQL", e)
finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")