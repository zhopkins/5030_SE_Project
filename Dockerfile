FROM python:3.10-alpine

COPY requirements.txt /app/requirements.txt

RUN pip install -r /app/requirements.txt

WORKDIR /app

COPY /src /app

CMD [ "python",  "app.py"]