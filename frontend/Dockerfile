# base image
FROM node:12.13-alpine

LABEL maintainer="Ali Shaikh <ali.shaikh@g1g.com>"

# set working directory
WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install and cache app dependencies
COPY package*.json ./

RUN npm install
#RUN npm install react-scripts -g

EXPOSE 3000

# start app
CMD ["npm", "start"]