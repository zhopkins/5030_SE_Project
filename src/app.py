from flask import Flask, render_template, request
import os
from database_api import database_api

app = Flask(__name__)

API = database_api('admin', 'K6hzJEOyNUGI6rOW')

@app.route('/')
def home():
    return render_template('login.html')

@app.route('/', methods=['POST'])
def login_attempt():
    user_name = request.form['login_txt']
    password = request.form['password_txt']

    if API.check_user_login(user_name, password) != None:
        return render_template('index.html')
    else: 
        print(user_name)
        print(password)
        return render_template('login.html')


if __name__ == "__main__":
    port = int(os.environ.get('PORT', 80))
    app.run(debug= True, host='0.0.0.0', port=port)