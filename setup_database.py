from pymongo import MongoClient
import database_api

if __name__ == "__main__":
    username = input("Username: ")
    password = input("Password: ")
    url = "mongodb+srv://" + username + ":" + password + "@fecomdata.3k9eben.mongodb.net/?retryWrites=true&w=majority"
    
    mgClient = MongoClient(url)
