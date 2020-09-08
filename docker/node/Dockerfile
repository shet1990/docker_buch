FROM node:14.9.0-alpine3.10 as stage

WORKDIR /var/www/html/front

COPY app/frontend/package*.json ./

RUN npm install

COPY app/frontend .

RUN npm run build

#production
FROM nginx:1.19.2-alpine as product

COPY --from=stage /var/www/html/front/dist /usr/share/nginx/html

EXPOSE 80

CMD [ "nginx", "-g", "daemon off;" ]