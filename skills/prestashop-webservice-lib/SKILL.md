# PrestaShop Webservice Library Skill

Este documento es la guía maestra para el desarrollo y mantenimiento de la librería `prestashop-webservice-lib`. Proporciona el contexto necesario para entender la arquitectura y escalar el proyecto manteniendo la integridad del diseño.

## 🧭 Índice de Contenidos

1.  [Arquitectura y Diseño](references/architecture.md) - Entiende las capas DDD y el flujo de datos.
2.  [Guía de Implementación de Recursos](references/resource_guide.md) - Cómo añadir nuevos endpoints paso a paso.
3.  [Estándares de Testing](references/testing_standards.md) - Cómo asegurar la calidad del código.

## 🎯 Objetivo de la Librería

Proporcionar un cliente PHP robusto, tipado y fácil de usar para interactuar con el Webservice de PrestaShop (v1.7 y v8), abstrayendo la complejidad del XML y ofreciendo una interfaz orientada a objetos.

## 🛠 Tecnologías Core

-   **PHP 8.x**
-   **GuzzleHttp**: Para las peticiones API.
-   **JMS Serializer**: Para la transformación entre XML y Objetos PHP.
-   **PHPUnit**: Para pruebas unitarias.

---
*Este Skill debe ser consultado antes de realizar cualquier cambio estructural en el proyecto.*
