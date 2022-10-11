from pymongo import MongoClient
from database_api_code import database_api

if __name__ == "__main__":
    username = input("Mongo Username: ")
    password = input("Mongo Password: ")
    fe_database = database_api(username, password)

    print(fe_database.check_user_login('foo_bar', 'bAr123'))

    print(fe_database.get_product_dic())
