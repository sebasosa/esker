Para utilizar la vista del proyecto hay q entrar a:

laravel/esker/Esker1/public

con eso entra al index del home




Tareas a realizar en el proyecto Laravel

-Agregar registro para administrador donde se fije si coincide el legajo para poder seleccionar el campo role. //hecho
-Agregar en el edit de productos la funcion de modificar las imagenes //hecho
-Agregar las validaciones de laravel
-Agregar la funcionalidad del boton de agregar al carro con javascript
-Agregar las alertas de exito o fracaso.

-crear el ABM usuario
-crear el ABM categoria //hecho
-crear Panel de Adminstrador //hecho

- hacer las vistas q faltan de administrador :
	-ABM users
	-ABM Categorias//hecho

----------------------------------------------------

Hacer todas las vistas para el usuario

-pag home //hecho
-pag productos //hecho
-pag detalle productos //hecho
-pag Carro de compras //hecho
-pag Contacto //hecho
-pag Preguntas Frecuentes //hecho

==========================================================

REQUISITOS MINIMOS PROYECTO INTEGRADOR

Lo mas importante de todo, que haya un ABM de algo. sea el proyecto que sea.
Debe acceso con usuario administrador: o armar middleware o hacer que haya dos role.
Debe contar con alta de usuarios en laravel
A su vez, que un controlador pueda poder subir imagenes
En los formularios, todo ellos, deberia haber validaciones del lado de laravel
En resumen, los formularios deben contar con 4 validaciones:

-html
-javascript
-laravel
-a punto de insertarse en la base de datos

Asegurarse en esa instacia que la información 
esté formateada de acuerdo a como la voy a guardar

BASE DE DATOS
Se recomienda utilizar migraciones, por comodidad y para aprender.
No es obligatorio hacer factories y seeders

HTML/CSS
Es requisito que el sitio sea resposive aunque algo no funcione del todo 
-> se recomienda mobile first!
Utilizar algunas etiquetas de html sean
semanticas, section, article, footer, main, nav, header
También es requisito utilizar blade, usar layouts (plantillas)
