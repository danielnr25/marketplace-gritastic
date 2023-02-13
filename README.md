

## Markeplace Gritastic

Gritastic es una aplicación clon de shutterstock, para la compra y venta de imagenes.
El sistema está realizado con el Framework Laravel y cuenta con las siguientes funcionalidades:

- Sección para las categorias de imagenes.
- Sección para la compra de alguna imagen especifica.
- Gestion de pagos con Stripe.
- Envío de factura via email
- Valoraciones.
- Carrito de compras.


## Instalación

- Clonar repositorio desde 


## Base de datos

- Crear Base de datos db_marketplace
  - **DB_CONNECTION=** 
  - **DB_HOST=**
  - **DB_PORT=**
  - **DB_DATABASE=** db_marketplace
  - **DB_USERNAME=** root
  - **DB_PASSWORD=**
- Correr las migraciones con **php artisan migrate --seed**

## Stripe

- Configuración cuenta de Stripe (.env file).
    - **STRIPE_KEY=**
    - **STRIPE_SECRET=**
    - **STRIPE_WEBHOOK_SECRET=**
    - **STRIPE_TAXES=**
    - **CASHIER_CURRENCY=**
    - **CASHIER_CURRENCY_LOCALE=**
    - **CASHIER_MODEL=**

## Mailtrap

- Configuración cuenta de Mailtrap (.env file).
  
  - **MAIL_MAILER=**
  - **MAIL_HOST=**
  - **MAIL_PORT=**
  - **MAIL_USERNAME=**
  - **MAIL_PASSWORD=**
  - **MAIL_ENCRYPTION=**
  - **MAIL_FROM_ADDRESS=**
  - **MAIL_FROM_NAME=**"${APP_NAME}"

