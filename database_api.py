import pymongo
from pymongo import MongoClient

class database_api:
    
    def __init__(self, username, password):
        url = "mongodb+srv://" + username + ":" + password + "@fecomdata.3k9eben.mongodb.net/?retryWrites=true&w=majority"
        self.mgClient = MongoClient(url)
        self.fe_database = self.mgClient["fecom_database"]
        self.table_dic = {"products": self.fe_database.products,
                          "transaction_history": self.fe_database.transaction_history,
                          "transaction_items": self.fe_database.transaction_items,
                          "user_accounts": self.fe_database.user_accounts,
                          "user_cart": self.fe_database.user_cart}
        

    def insert_items(self, table, new_entry_dic_array):
        return self.table_dic[table].insert_many(new_entry_dic_array)
    
    def delete_item(self, table, item_description):
        return self.table_dic[table].delete_many(item_description)

    def add_user(self, username, password):
        return 0

    """
    check_user_logi(username, password)
        
        Queries the user_account db for the given login credentials

        parameters:
            username (str): the users username
            password (str): the users password
        returns:
            a dictonary of the users account, will return None if the user dosen't exist
    """
    def check_user_login(self, username, password):
        user_collect = self.table_dic["user_accounts"]
        user_json = user_collect.find_one({"username": username, "encoded_password": password})
        return user_json 

    def get_product_dic(self, number_wanted = 1, product_query = {}):
        prod_list = []
        for entry in self.table_dic["products"].find(product_query):
            if len(prod_list) < number_wanted:
                prod_list.append(entry)
            else:
                break

        return prod_list

    def get_user_cart(self, user_id):
        return []
    
    def get_user_history(self, user_id):
        return []

    def add_item_cart(self, user_id):
        return 0
    
    def remove_item_cart(self, user_id, prod_id):
        return 0