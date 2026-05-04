# Estándares de Testing

El proyecto utiliza **PHPUnit** para asegurar que la transformación de datos entre XML y Objetos es correcta.

## 🧪 Pruebas de Dominio

Cada recurso debe tener un test de deserialización en `tests/[Resource]/Domain/Prestashop[Name]Test.php`.

### Ejemplo de Estructura de Test:

1.  **XML Mock**: Crea un string XML que represente la respuesta real de PrestaShop.
2.  **Expected Object**: Instancia el objeto de dominio con los datos esperados.
3.  **Assertion**: Compara el resultado de `Prestashop[Name]::byXml($xml)` con el objeto esperado.

## 📁 Organización de Tests

-   `tests/`: Directorio raíz de pruebas.
    -   `[Resource]/Domain/`: Tests unitarios de modelos y serialización.
    -   `Prod/`: Tests de integración manual (usualmente ignorados en CI, marcados con `@group ignored-group`).

## 🛠 Ejecución de Tests

Para ejecutar todas las pruebas:
```bash
vendor/bin/phpunit
```

Para ejecutar una carpeta específica:
```bash
vendor/bin/phpunit tests/Categories
```
