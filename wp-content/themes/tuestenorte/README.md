# Tueste Norte

Proyecto web desarrollado con WordPress mediante un tema personalizado, utilizando PHP, HTML y CSS.

## 1. Activación del tema

Para activar el tema de Tueste Norte:

1. Iniciar Apache y MySQL desde XAMPP.
2. Acceder al panel de administración de WordPress.
3. Entrar en **Apariencia → Temas**.
4. Activar el tema **Tueste Norte**.

La carpeta del tema se encuentra en:

`wp-content/themes/tuestenorte/`

## 2. Activación de los plugins

Desde el panel de administración de WordPress, entrar en **Plugins → Plugins instalados** y activar los siguientes plugins:

- **Advanced Custom Fields (ACF):** permite crear y gestionar los campos personalizados de los cafés, como el origen, las notas de cata, el nivel de tueste y el precio.
- **TN ejercicio:** plugin desarrollado para este proyecto. Limita los extractos del blog a 20 palabras y muestra una nota en el pie de página con la fecha.

## 3. Decisiones sobre el «tueste de la semana»

En este caso no hemos hecho el tueste de la semana pero si una entrada de blog sobre datos informacion de interés del café.

La información que se muestra de cada café incluye:

- Nombre del café.
- Origen.
- Notas de cata.
- Nivel de tueste.
- Precio.


## 4. API REST de WordPress

WordPress dispone de una API REST que permite consultar los contenidos publicados en la web.

Para consultar los cafés del proyecto se utiliza la siguiente dirección:

`http://localhost/tueste-norte-wp/wp-json/wp/v2/cafe`

El tipo de contenido personalizado está registrado como `cafe`, por eso la ruta utiliza ese nombre en singular.

### Ejemplo de respuesta JSON real

El siguiente fragmento corresponde al café Etiopía, obtenido de la instalación local:

```json
{
  "id": 131,
  "slug": "etiopia",
  "status": "publish",
  "type": "cafe",
  "title": {
    "rendered": "Etiopía"
  },
  "acf": {
    "origen": "Etiopía Yirgacheffe",
    "notas_de_cata": "Cítricos\r\nNaranja \r\nJazmín",
    "nivel_de_tueste": "suave",
    "precio": 13.2
  },
  "ficha": {
    "origen": "Etiopía Yirgacheffe",
    "notas_de_cata": "Cítricos\r\nNaranja \r\nJazmín",
    "nivel_de_tueste": "suave",
    "precio": "13.2"
  }
}
```

### Campos personalizados expuestos

Los campos personalizados utilizados en los cafés son:

- `origen`
- `notas_de_cata`
- `nivel_de_tueste`
- `precio`

La respuesta contiene dos apartados:

- **`acf`:** datos expuestos por la configuración de ACF para la API REST.
- **`ficha`:** datos añadidos mediante la función `register_rest_field()` en el plugin.

De esta forma, los datos de los cafés pueden consultarse desde la API REST de WordPress.