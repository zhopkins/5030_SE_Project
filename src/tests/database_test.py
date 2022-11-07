import pytest
from database_api import database_api
from pymongo import MongoClient

class Test_API_Class:
    API = database_api('admin', 'K6hzJEOyNUGI6rOW')
    test_user = {'_id': 69,
                 'encoded_password': '321', 
                 'user_id': '123',
                 'username': 'test'}

    
    #testing if we can check user login
    def test_user_login(self):
        output = self.API.check_user_login('foo_bar', 'bAr123')
        assert output['username'] == 'foo_bar'
        assert output['encoded_password'] == 'bAr123'

    #test if items are added
    def test_inserting(self):
        assert len(self.API.insert_items('user_accounts', [self.test_user]).inserted_ids) == 1
        
    #testing if items are deleted
    def test_deleting(self):
        assert self.API.delete_item('user_accounts', self.test_user).deleted_count == 1
    
    #testing if we can get a specificed number of entries
    def test_get_product_dic(self):
        assert len(self.API.get_product_dic(1)) == 1

    #testing if query works for get_product_dic
    def test_get_product_dic_query(self):
        query_res = self.API.get_product_dic(1, {"prod_id": 1})
        assert query_res[0]["prod_id"] == 1
    