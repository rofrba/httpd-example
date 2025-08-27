# httpd-example

Este proyecto muestra cómo crear una imagen de contenedor personalizada usando Apache HTTPD y servir contenido estático.

## Construir la imagen con Podman

Para construir la imagen de contenedor llamada `httpd-app` usando el `Dockerfile` incluido, ejecuta el siguiente comando en el directorio raíz del proyecto:

```sh
docker build -t httpd-app .
```

Esto creará una imagen llamada httpd-app que incluye los archivos estáticos de la carpeta files/.

## Ejecutar el contenedor

Para ejecutar el contenedor y exponer el servicio en el puerto 8080, usa:

```sh
docker run -it -p 8080:8080 httpd-app
```

Luego, abre tu navegador y visita http://localhost:8080 para ver la página web servida por Apache dentro del contenedor.