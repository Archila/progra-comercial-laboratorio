
## Instrucciones

### 1. Iniciar servicios
Asegurate de tener iniciado Apache (servidor web) y MySQL (base de datos) desde la interfaz de XAMPP.
![alt text](img/apache.png)


### 2. Crea tu archivo index.php para la página principal. 
NOTA: Si vas a utilizar código PHP dentro del archivo la extensión tiene que ser `.php` y no `.html`

### 3. Ingresa a tu base de datos y verifica o crea la tabla que vas a utilizar
Desde tu navegador ingresa a `localhost/phpmyadmin`
Crea una nueva base de datos, para este ejemplo el nombre será `tienda`
Ve al archivo `tienda-script.sql` y modifica la información de las tablas para ajustarlas a tu producto
Seleccionando la nueva base de datos, en la pestaña de SQL copia y pega el contenido del archivo `tienda-script.sql` modificado y ejecutalo. 
Listo, ya tienes tu base de datos con registros. 

### 4. Crear conexión a la base de datos
Crea un archivo llamado `conexion.php` con las credenciales y la conexión a la base de datos, la estructura básica es la siguiente: 

```
<?php
$servername = "localhost";  // Servidor (en XAMPP es localhost)
$username = "root";       // Usuario por defecto en local o crear uno nuevo
$password = "";           // Contraseña (vacía en XAMPP por defecto)
$dbname = "tienda";  // Nombre de la base de datos

// Crear conexión
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
```
4. Añadir los cambios al repositorio (git add, git commit, git push)
Ej:
```
git add .
git commit -m "Add submodule"
git push
```
5. Inicializar y actualizar Sub-módulos, cuando alguien clona el repositorio por primera vez, debe de ejecutar el siguiente comando para inicializar y actualizar los sub-módulos
```
git submodule update --init --recursive
```
6. Para actualizar las referencias de los sub-módulos
```
git submodule update --remote
```

### Pasos crear un nuevo microservicio


1. Instalación de paquetes para microservicios
```
nest new nombre-ms
cd nombre-ms
npm install @nestjs/microservices
```
2. Paquetes para variables de entorno y su validación
```
npm install dotenv joi
```
3. Paquetes para las validaciones de los dto
```
npm install class-validator class-transformer
```
4. Paquetes para el ORM y la base de datos SQL Server
```
npm install --save typeorm mssql
```
5. Paquetes para el medio de transporte NATS
```
npm install --save nats
```
6. Crear un nuevo recurso
```
nest g res agro --no-spec
```


## Importante
Si se trabaja en el repositorio que tiene los sub-módulos, **primero actualizar y hacer push** en el sub-módulo y **después** en el repositorio principal. 

Si se hace al revés, se perderán las referencias de los sub-módulos en el repositorio principal y tendremos que resolver conflictos.

## Contenedores
Para los contenedores, si se requiere reconstruir una imagen
```
docker compose build nombre_del_servicio
docker compose up -d nombre_del_servicio
```
Si solo se quiere reiniciar el contenedor, sin rebuild
```
docker compose restart nombre_del_servicio
```
Si se modificó el Dockerfile y se require forzar el rebuild 
```
docker compose up -d --build nombre_del_servicio
```
