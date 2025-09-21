# Hola Mundo PHP con Docker

Una aplicación simple de "Hola Mundo" en PHP que se ejecuta en un contenedor Docker.

## Estructura del proyecto

```
PHP/
├── index.php          # Página principal con "Hola Mundo"
├── Dockerfile         # Configuración del contenedor Docker
├── docker-compose.yml # Configuración para Docker Compose
└── README.md          # Este archivo
```

## Requisitos

- Docker
- Docker Compose

## Cómo ejecutar

### Opción 1: Usando Docker Compose (Recomendado)

```bash
# Construir y ejecutar el contenedor
docker-compose up --build

# Para ejecutar en segundo plano
docker-compose up -d --build
```

### Opción 2: Usando Docker directamente

```bash
# Construir la imagen
docker build -t hola-mundo-php .

# Ejecutar el contenedor
docker run -p 8080:80 hola-mundo-php
```

## Acceder a la aplicación

Una vez que el contenedor esté ejecutándose, abre tu navegador y ve a:

```
http://localhost:8080
```

## Detener la aplicación

### Si usaste Docker Compose:
```bash
docker-compose down
```

### Si usaste Docker directamente:
```bash
# Encontrar el ID del contenedor
docker ps

# Detener el contenedor
docker stop <container_id>
```

## Características

- ✅ PHP 8.2 con Apache
- ✅ Página web responsive
- ✅ Muestra información del servidor
- ✅ Diseño moderno con gradientes
- ✅ Fácil de desplegar con Docker

## Personalización

Puedes modificar el archivo `index.php` para cambiar el contenido de la página. Los cambios se reflejarán automáticamente gracias al volumen montado en el contenedor.