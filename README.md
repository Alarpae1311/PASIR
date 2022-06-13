# PASIR

Este proyecto trata sobre un sistema de gestión de ventas y almacén sobre contenedores. Usaremos Snipe-IT, una herramienta open-source gratuita (con ciertas limitaciones) que sirve para controlar los equipos informáticos en una empresa, saber que persona tiene un equipo, cuando fue adquirido, que licencias de software tiene activas y que accesorios tiene, a parte estará redundada en varios servidores y balanceada y se desplegará Jenkins que es una herramienta que sirve para poder actualizar automáticamente Snipe-IT ante cualquier cambio que realicemos en nuestro Github. A parte se usará Traefik para el balanceo y proxy inverso de la página.

Se usará para el proyecto Snipe-IT, Jenkins y Traefik. Todo esto montado sobre contenedores Docker. Además todo esto se montará sobre un Debian 11 en dos VPS.

# 1. Descargar el repositorio en tu equipo.

Usamos el siguiente comando:

git clone https://github.com/Alarpae1311/PASIR.git

# 2. Desplegar los microservicios.

Entramos en cada carpeta y escribimos el siguiente comando en cada una para ir desplegando cada microservicio:

docker stack deploy -c docker-compose.yml <nombre del stack>
