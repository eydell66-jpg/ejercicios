

¿qué fichero crearías para que solo la página «Quiénes somos» (slug quienes-somos) tuviera un diseño distinto, sin tocar el resto de páginas?

Respuesta:crearia la página desde wordpress quienes somos y en visual studio quienes-somos.php con el formato que quiero pare visualizar la página con html y php y quedaria creado en la misma carpeta del tema por lo que wordpress lo asocia con el slug

 En un comentario PHP dentro del propio plugin, responde: si otro plugin también filtrara excerpt_length con prioridad 5 devolviendo 55, ¿qué longitud ganaría y por qué?

 Respuesta: en ese caso se ejecutaría al último nuestro plugins y devolvería 20, y eso es porque wordpress ejecuta primero los de menor prioridad y después los de mayor prioridad.
