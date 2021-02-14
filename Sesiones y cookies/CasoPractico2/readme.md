# CASO PRÁCTICO 2 SESIONES

## ESTRUCTURA

### CARPETA LIB (clases)

- **user.php** : Contiene las propiedades de la clase principal usuario con sus métodos get y set.
  
- **connection.php** : Contiene la conexión a la base de datos junto con los métodos de errores de conexión y el método que realiza las consultas sql.
  
- **bbdd.php** : Contiene todas las funciones que se encargan de la inserción, consulta y actualización de datos en la base de datos. **_HEREDA DE CONNECTION.PHP_**
  
- **seguridad.php** : Es el archivo de seguridad que abre la sesión y contiene funciones para la seguridad base de las páginas.

### CARPETA RAIZ (php que ve el usuario)

- **index.php** : Página de inicio que muestra unos campos para el login y un enlace para el registro en caso de no estar registrado.
  
- **miperfil.php** : En caso de hacer login accedemos a la página que nos da la opción de modificar datos del usuario.
  - _actualizar_perfil.php_ : Se encarga de enviar la consulta a la base de datos para la actualización de los datos y en caso de error nos avisa dando un enlace para volver a miperfil.php y volver a intentar la actualización.
  
- **registro.php** : Página con formulario para el registro de un usuario nuevo.
  - _registro_usuario_ : Envia el registro nuevo mediante consulta a la base de datos previa limpieza de los campos introducidos y buscando también si ya existe el usuario.
