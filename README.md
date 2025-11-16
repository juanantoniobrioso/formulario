# Formulario

En este proyecto debemos de hacer un formulario donde 
el usuario contesta en varios campos y envía esa información
mediante una llamada API REST con el verbo POST a `procesar.php`
y mostrará con `echo` que la información ha sido enviada

En este formulario se ha usado bootstrap para tener un diseño
mínimamente bueno para la vista

## Errores que he tenido

El principal error es que no he sabido mostrar en el `procesar.php`
el archivo enviado en el formulario, así que se ha quedado solo con el
título de "Archivo Adjunto"

## Conclusión

En este proyecto he aprendido varias cosas sobre las API REST. Una de ellas
ha sido el funcionamiento de `isset()` el cual es útil cuando no se ha puesto `required`
en el atributo, ya que gracias a ello se puede evitar el mensaje de error que imprime
directamente en la página y que el usuario puede ver, y en su lugar puede no mostrar nada
o mostrar que no se ha marcado/escrito en ese campo