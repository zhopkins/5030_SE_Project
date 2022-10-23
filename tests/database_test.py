import pytest
from database_api import database_api
from pymongo import MongoClient

class Test_API_Class:
    API = database_api('admin', 'K6hzJEOyNUGI6rOW')
        
    def test_user_login(self):
        output = self.API.check_user_login('foo_bar', 'bAr123')
        assert output['username'] == 'foo_bar'
        assert output['encoded_password'] == 'bAr123'

    """ def test_inserting(self):
        assert self.API.insert_items('user_accounts', ) == 0

    def test_deleting(self):
        assert self.API.delete_item() == 0 """
    