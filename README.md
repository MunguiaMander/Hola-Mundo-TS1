# IT COMMUNITY CUNOC
# Primera Practica del laboratorio de Teoria de Sistemas 1
**Marco Jose Munguia Alva 201931804**

## Consejos y Requisitos para el sistema de manera local.
Ten en cuenta los siguientes aspectos y requisitos para que el proyecto pueda ejecutarse de la mejor manera y tengas la mejor experiencia:
+ Asegurarse de tener instalado `PHP8.0` y `PHP8.0-mysql`
+ Tener activado el modulo de `PHP8.0` para `Apache2` (Puedes activarlo con el comando `a2enmod php8.x` la version que tengas instalada)
+ Activar el PDO para mysql en las configuraciones de `Apache2` estas las puedes encontrar en `/etc/php/[version]/apache2/php.ini` busca en este archivo de configuracion la instruccion `;extension=pdo_mysql` y elimina el **;** y asi evitar conflictos de configuraciones/drivers de mysql no encontrados.
+ Asegurate de reiniciar los servicios de `Apache2` con el comando `service apache2 restart` para que los cambios se realicen.
***

## Instrucciones de instalación y compilación

1. Dirígete a la carpeta donde están los archivos del proyecto y dale permisos al script:

```bash
   chmod +x MoveToApache2.bash
```
2. Una vez compilado el programa, puedes ejecutar en la línea de comandos esta orden para poder mover el proyecto a **localhost**:

```bash
    ./MoveToApache2.bash
```

3. Una vez el scrip te indique que todo se ejecuto correctamente puedes dirgirte a tu navegador favorito y navegar hacia `localhost/PRACTICA-HOLA-MUNDO/View/Frontend`

Por ultimo indicar que si quieres ejecutar el proyecto en local tengas en cuenta las recomendaciones que se indican antes de las instrucciones de Instalacion.