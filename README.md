# Custom Theme

## Example .env

```
WORDPRESS_DB_USER=root
WORDPRESS_DB_PASSWORD=password
WORDPRESS_DB_HOST=mysql
WORDPRESS_DB_NAME=ecommerce-demo
CLIENT_PORT=8000
PROJECT_NAME=ecommerce-demo
WP_ADMIN_USER=ecommerce-demo-admin
WP_ADMIN_PASS=password
```

## Build CSS

Run the following command to install tailwind CSS:

```
npm install -D tailwindcss
```

Run the following command to build the CSS file:

```
cd wp-content/themes/<theme> && npx tailwindcss -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch
```
