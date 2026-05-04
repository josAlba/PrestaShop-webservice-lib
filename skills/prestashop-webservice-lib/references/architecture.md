# Arquitectura y Diseño

El proyecto utiliza una arquitectura inspirada en **Domain-Driven Design (DDD)** y **Arquitectura Hexagonal**.

## 층 Capas del Proyecto

### 1. Capa de Dominio (`Domain`)
Es el corazón de la lógica. No tiene dependencias externas (excepto anotaciones de serialización).
-   **Models**: Clases `final` que representan los recursos de PrestaShop.
-   **Display**: Objetos de valor que definen qué campos solicitar a la API (parámetro `display` de PrestaShop).
-   **Filter**: Objetos para construir consultas de filtrado (parámetro `filter` de PrestaShop).
-   **Item Abstracts**: Lógica compartida para serialización y comportamiento base de los recursos.

### 2. Capa de Aplicación (`Application`)
Contiene los casos de uso o servicios de acción.
-   **Get**: Servicio para recuperar datos. Implementa el método mágico `__invoke`.
-   **Put**: Servicio para actualizar datos.
-   **GetAbstract**: Lógica común para realizar peticiones y deserializar respuestas.

### 3. Capa de Infraestructura (`Infrastructure`)
Implementaciones técnicas de las interfaces definidas en el dominio.
-   **ClientHttp**: Implementación con Guzzle del cliente HTTP.

### 4. Capa Compartida (`Shared`)
Contiene elementos transversales a todos los módulos.
-   **Resources.php**: Diccionario central de todos los endpoints de PrestaShop.
-   **Formats.php**: Constantes para formatos (XML, JSON).

## 🔄 Flujo de Datos

1.  El usuario instancia un servicio de **Application** (ej. `Products\Application\Get`).
2.  El servicio solicita datos a la **Infrastructure** (`ClientHttp`).
3.  La respuesta XML se deserializa en objetos del **Domain** usando JMS Serializer.
4.  Se devuelve el objeto de dominio al usuario.
