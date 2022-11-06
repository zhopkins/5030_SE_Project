FROM nginx:1.10.1-alpine

COPY src dest

EXPOSE 80

CMD [ "executable" ]