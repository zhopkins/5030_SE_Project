from pymongo import MongoClient

class database_api:

    def __init__(self, username, password):
        url = "mongodb+srv://" + username + ":" + password + "@fecomdata.3k9eben.mongodb.net/?retryWrites=true&w=majority"
        self.mgClient = MongoClient(url)

    #TODO
    def list_tables():
        return 0

    #TODO
    def create_table():
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

    def check_user_login(username, password):
        isUser = False

        return isUser 

    def get_product_list():
        return []

    def get_user_cart(user_id):
        return []
    
    def 