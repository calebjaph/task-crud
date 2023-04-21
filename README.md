
# Task CRUD (TodoList) 😎

Bienvenido a la documentación del proyecto "Todolist". Este proyecto tiene como objetivo proporcionar una solución sencilla y eficaz para la gestión de tareas diarias. Con esta aplicación, podrás ver todas tus tareas en un solo lugar, crear nuevas tareas, editar las existentes y eliminar las que ya no necesitas. El proyecto está desarrollado en PHP y utiliza el patrón de diseño CRUD (Crear, Leer, Actualizar y Eliminar) para interactuar con la base de datos y gestionar las tareas. En esta documentación, encontrarás información detallada sobre cómo utilizar la aplicación y cómo personalizarla para adaptarla a tus necesidades. 

## Instalación del Backend

¡Bienvenido! Si estás aquí, es porque estás a punto de configurar el Backend de nuestro proyecto. Para asegurarnos de que todo funcione correctamente en tu entorno local, es importante que tengas en cuenta varios factores durante la instalación. Estos factores garantizarán el correcto funcionamiento de la plataforma y te permitirán aprovechar al máximo todas sus funcionalidades. 


## Instalaciones necesarias

 - [Composer](https://getcomposer.org/download/)
 - [Mamp (MacOS)](https://www.mamp.info/en/downloads/)
 - [XAMPP (Windows / Linux)](https://www.apachefriends.org/download.html)


# Configuración de la Base de Datos


**Creación de la Base de Datos en PHPMyAdmin**

La creación de una Base de Datos es el primer paso necesario para configurar nuestro proyecto. Para ello, utilizaremos la herramienta PHPMyAdmin. La Base de Datos que necesitamos crear se llama "Tasks" y es en ella donde migraremos todas las tablas necesarias para el correcto funcionamiento del proyecto.


Si no estás seguro de cómo crear una Base de Datos en PHPMyAdmin, no te preocupes. A continuación te dejamos un tutorial detallado que te guiará paso a paso en el proceso. ¡Manos a la obra!

 - [Como crear una base de datos en PHPMyAdmin](http://webvaultwiki.com.au/Default.aspx?Page=Create-Mysql-Database-User-Phpmyadmin&NS=&AspxAutoDetectCookieSupport=1)

# Configuración del .ENV para la conexión de la base e datos

El archivo .ENV es un archivo de configuración que se utiliza en nuestro proyecto de Backend para definir variables de entorno. Estas variables pueden incluir información como la dirección de la base de datos, credenciales de acceso, entre otros detalles necesarios para el correcto funcionamiento del proyecto.

Es importante destacar que el archivo .ENV debe ubicarse en la raíz de la carpeta de Backend, ya que este es el lugar donde se buscará por defecto al cargar las variables de entorno. Es decir, si el archivo .ENV no se encuentra en la ubicación correcta, el proyecto no podrá acceder a las variables de entorno necesarias para funcionar de manera adecuada.

**Configuración para MacOS con Mamp**

```http
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=tasks
DB_USERNAME=mamp
DB_PASSWORD=
```

**Configuración para Windows con XAMPP**

```http
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks
DB_USERNAME=root
DB_PASSWORD=
```

## Migración de la base de datos

Antes de ejecutar el siguiente comando, es importante que tengas en cuenta dos requisitos necesarios para su correcto funcionamiento: tener instalado el gestor de paquetes Composer y contar con un servidor MySQL en tu entorno local. Si utilizas MAMP o XAMPP, ya tienes el servidor MySQL configurado.

Una vez que hayas cumplido con estos requisitos, colócate en la carpeta raíz del Backend en una terminal y ejecuta el siguiente comando para continuar con la configuración. ¡No te preocupes si no conoces todos los detalles del comando, te explicaremos todo lo que necesitas saber en la documentación!

```bash
  php artisan migrate
```
Es importante destacar que al ejecutar el comando correspondiente, la migración de la base de datos se realizará de manera automática. Sin embargo, antes de ejecutarlo, debes asegurarte de cumplir con los requisitos necesarios, como tener instalado el gestor de paquetes Composer y contar con un servidor MySQL en tu entorno local. Si utilizas MAMP o XAMPP, ya tienes el servidor MySQL configurado.


## Ejecución del servidor Backend

Es importante tener en cuenta que para que el Frontend pueda funcionar de manera adecuada, es necesario que el Backend esté en funcionamiento. Esto significa que debes asegurarte de haber iniciado el Backend antes de intentar utilizar el Frontend.

El Frontend y el Backend son dos componentes esenciales de nuestro proyecto y trabajan en conjunto para brindarte una experiencia de usuario óptima. 

```bash
  php artisan serve
```

Es importante destacar que el comando que necesitamos ejecutar para iniciar nuestro servidor PHP funciona en distintos sistemas operativos, tales como MacOS, Windows y Linux. Esto significa que no importa qué sistema operativo estés utilizando, siempre y cuando lo hayas configurado correctamente, podrás ejecutar el comando sin problemas.

Es importante tener en cuenta que antes de ejecutar el comando, es necesario configurar nuestro servidor PHP para asegurarnos de que todo funcione de manera adecuada. Si no estás seguro de cómo configurar tu servidor PHP, no te preocupes, te explicaremos cómo hacerlo en la documentación correspondiente.
## Caracteristicas de Todolist

- Crear una nueva tarea 📚
- Editar las tareas existentes ✏️
- Completar tareas ✅
- Eliminación de tareas culminadas 🗑


## Tecnologías que se usaron
👩‍💻 PHP +8.1

🧠 Framework Laravel 9 

👯‍♀️ PHPMyAdmin (Base de Datos)

🤔 HTML, CSS, JS y Bootstrap
