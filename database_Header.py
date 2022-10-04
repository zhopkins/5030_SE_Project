from pymongo import MongoClient

class database_api:

    def __init__(self, username, password):
        url = "mongodb+srv://" + username + ":" + password + "@fecomdata.3k9eben.mongodb.net/?retryWrites=true&w=majority"
        self.mgClient = MongoClient(url)

    #TODO
    def create_Table():
        return 0
    
    #TODO   
    def query_Table():
        return 0
    
    #TODO
    def insert_item():
        return 0
    
    #TODO
    def delete_item():
        return 0