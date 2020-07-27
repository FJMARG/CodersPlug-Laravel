Recordar que al clonar el repositorio, se debera ejecutar los comandos para actualizar las dependencias con composer, ejecutar las migraciones a la base de datos, y 
los seeders. Para eso escribir sobre la consola:
                                               1- Clonar repositorio -> git clone https://github.com/FJMARG/CodersPlug-Laravel
                                               2- Actualizar dependencias -> composer update
					       3- Configurar .env usando la plantilla .env.example
					       4- Generar app key de Laravel, ejecutando php artisan key:generate
                                               5- Ejecutar migraciones -> php artisan migrate
                                               6- Ejecutar seeders -> php artisan db:seed
					       7- Crear una carpeta public en storage\app
                                               8- Eliminar la carpeta vacia de public/storage (si existe), y ejecutar php artisan storage:link, para tener la carpeta donde se 
guardaran los archivos subidos al registrarse. 