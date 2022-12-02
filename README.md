# 5030_SE_Project
## Docker walk through:
Run these commands to use the docker file

For the python code
```
$ cd ../5030_SE_Project
$ docker image build -t webpage .
$ docker run -p 80:80 -d webpage
```
Type into browser search bar 'localhost:80'

For xampp server

pull the docker image from here https://hub.docker.com/r/tomsik68/xampp/

then run this command
'''
$ docker run --name myXamppApp -p 41061:22 -p 41062:80 -d -v /your/file/path:/www tomsik68/xampp
'''
go to http://localhost:41062/www/login.html 
