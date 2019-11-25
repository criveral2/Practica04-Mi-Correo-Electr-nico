
                                               	PRÁCTICA DE LABORATORIO 

<pre> 
CARRERA: : INGENIERIA DE SISTEMA/COMPUTACION	
ASIGNATURA: HIPERMEDIAL
NRO. PRÁCTICA:	4	
TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL
OBJETIVO ALCANZADO:
Entender y organizar de una mejor manera los sitios de web en Internet
• Diseñar adecuadamente elementos gráficos en sitios web en Internet.
• Crear sitios web aplicando estándares actuales.

</pre>

ACTIVIDADES DESARROLLADAS
1.	Generar el diagrama E-R para la solución de la práctica 

Empezaremos por modelar un diagrama de entidad y relación el cual nos ayudara al manejo de nuestros datos en una base, para este caso seria una base de datos MySQL.

![image](https://user-images.githubusercontent.com/52549697/69506825-43312e00-0efe-11ea-90d0-1a00ceebf3c3.png)

2.	Crear un repositorio en GitHub con el nombre “Practica04 – Mi Correo Electrónico”

Crearemos un repositorio en la plataforma github para tener un seguimiento del nuestro proceso de creación, esto nos permitirá la posibilidad de recuperar código eliminado ya que esta guarda nuestros estados dependiendo de cuanto utilicemos el comando commit.

![image](https://user-images.githubusercontent.com/52549697/69507259-ea629500-0eff-11ea-9cf2-3413f92b3791.png)

3.	Realizar un commit y push por cada requerimiento de los puntos antes descritos.

Procederemos a mostrar los respectivos commit que se han venido generando durante el transcurso del desarrollo.

![image](https://user-images.githubusercontent.com/52549697/69507337-285fb900-0f00-11ea-8d39-5d17561318f8.png)


4.	Luego, se debe crear el archivo README del repositorio de GitHub.
Crearemos el archivo readme.md para realizar el informe de la practica.

![image](https://user-images.githubusercontent.com/52549697/69507461-9d32f300-0f00-11ea-8314-fb1cab8e29b3.png)

5.	. Generar informe de los resultados en el formato de prácticas. Debe incluir:

a.	Nombre de la base de datos
    base_reuniones

c.	Sentencias SQL de la estructura de la base de datos
Sentencia para recuperar los datos del usuario para ello utilizamos la variable aux la cual fue recuperada con el método post

![image](https://user-images.githubusercontent.com/52549697/69507685-5c87a980-0f01-11ea-9365-5554069d9c0a.png)

La siguiente sentencia nos permite recuperar las reuniones en las que el usuario tiene un cargo de remitente ya que fue el usuario el que creo las reuniones.

![image](https://user-images.githubusercontent.com/52549697/69507731-8640d080-0f01-11ea-88b9-bc1a715e887c.png)


Procedemos a recuperar las reuniones en la cual el usuario tiene un cargo de invitado en esta el usuario no podrá realizar invitaciones hacia más miembros de la plataforma debido a que no cumple con el cargo de administrador 


![image](https://user-images.githubusercontent.com/52549697/69507801-c86a1200-0f01-11ea-9e6c-d64914c58330.png)


Obtenemos todos los usuario que serán observados por un usuario administrados

![image](https://user-images.githubusercontent.com/52549697/69507888-30b8f380-0f02-11ea-8a32-18eb8e552120.png)

d.	El desarrollo de cada uno de los requerimientos antes descritos

A continuación se muestra el diseño de la pagina de logeo el cual permitirá definir si un usuario tiene el rol de administrador o de cliente para ello verificaremos su cargo con la que se encuentra guardada en nuestra base de datos y definiremos si el usuario efectivamente cumple con los requisitos.


![image](https://user-images.githubusercontent.com/52549697/69508142-d1a7ae80-0f02-11ea-9516-d9ceca708f37.png)
![image](https://user-images.githubusercontent.com/52549697/69508231-306d2800-0f03-11ea-8237-e6e1883a6a32.png)


El usuario podrá observar sus reuniones creadas y en las que participa además de poder modificar sus datos
![image](https://user-images.githubusercontent.com/52549697/69508394-8d68de00-0f03-11ea-9c40-9c4c63c7f596.png)
![image](https://user-images.githubusercontent.com/52549697/69508424-a96c7f80-0f03-11ea-8465-213dea373c9b.png)

El administrador podrá observar todos los usuario registrados en la aplicacion
![image](https://user-images.githubusercontent.com/52549697/69508513-0e27da00-0f04-11ea-87bd-4357d1c9274e.png)
![image](https://user-images.githubusercontent.com/52549697/69508513-0e27da00-0f04-11ea-87bd-4357d1c9274e.png)

De igual manera el usuario tendrá la posibilidad de modificar sus datos y realizar invitaciones a las reuniones creadas por el mismo
![image](https://user-images.githubusercontent.com/52549697/69508633-57782980-0f04-11ea-8e3b-6f355ffb270e.png)
![image](https://user-images.githubusercontent.com/52549697/69508683-78407f00-0f04-11ea-8652-bccbece19394.png)
![image](https://user-images.githubusercontent.com/52549697/69508731-8abab880-0f04-11ea-814d-7cc80392a20e.png)
![image](https://user-images.githubusercontent.com/52549697/69508789-b5a50c80-0f04-11ea-86b2-3064e40150e6.png)

e.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos).

Creamos estilos css para que nuestra página tengo mejor presentación hacia el usuario 

![image](https://user-images.githubusercontent.com/52549697/69508835-e4bb7e00-0f04-11ea-897d-5e179a1f20e0.png)
![image](https://user-images.githubusercontent.com/52549697/69508856-f8ff7b00-0f04-11ea-86e7-14ded8df26dc.png)

![image](https://user-images.githubusercontent.com/52549697/69508882-20eede80-0f05-11ea-89a3-b7a17232ac87.png)


![image](https://user-images.githubusercontent.com/52549697/69508959-54ca0400-0f05-11ea-989f-c83f6f8c9ee7.png)
![image](https://user-images.githubusercontent.com/52549697/69508988-63b0b680-0f05-11ea-9c79-f339fcad31f1.png)

![image](https://user-images.githubusercontent.com/52549697/69508988-63b0b680-0f05-11ea-9c79-f339fcad31f1.png)

![image](https://user-images.githubusercontent.com/52549697/69509102-b4c0aa80-0f05-11ea-8432-2ac840cfcb79.png)
![image](https://user-images.githubusercontent.com/52549697/69509171-036e4480-0f06-11ea-87ca-8f12fe5c4ecd.png)



h.	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica)

Usuario: criveral2
Proyecto: https://github.com/criveral2/Practica04-Mi-Correo-Electr-nico.git

<pre>

RESULTADO(S) OBTENIDO(S):
Tener el conocimiento suficiente para que el estudiante pueda entender y organizar de una mejor manera los sitios de
web y de negocios en Internet

CONCLUSIONES:
Los estudiantes podrán organizar sitios web basados en el lenguaje de programación PHP para persistir información en
una base de datos relacional.
RECOMENDACIONES:
Probar la solución de la práctica en al menos tres navegadores web; Google Chrome, Firefox y Safari

Nombre de estudiante: _____Christian Rivera________________________

</pre>
