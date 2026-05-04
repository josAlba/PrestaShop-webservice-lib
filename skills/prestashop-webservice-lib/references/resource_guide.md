# Guía de Implementación de Recursos

Sigue estos pasos para añadir un nuevo endpoint de PrestaShop a la librería.

## 1. Registro en Resources
Añade la constante del recurso en `src/Shared/Domain/Resources.php`.
```php
public const NEW_RESOURCE = 'new_resource_name';
```

## 2. Definición del Modelo de Dominio
Crea la clase en `src/[Resource]/Domain/[Name].php`.
-   Debe extender `PrestashopItemAbstract`.
-   Usa `@Annotation\SerializedName` para los campos.
-   Usa `@Annotation\XmlElement(cdata=true)` para strings.

## 3. Clases de Soporte (Display y Filter)
-   **Display**: Define los campos booleanos para la selección selectiva.
-   **Filter**: Define las propiedades para búsqueda.

## 4. Contenedor Prestashop
Crea `src/[Resource]/Domain/Prestashop[Name].php`.
-   Es la clase que mapea el elemento raíz `<prestashop>`.
-   Usa `@XmlRoot("prestashop")`.

## 5. Servicio de Aplicación
Crea `src/[Resource]/Application/Get.php`.
-   Extiende `GetAbstract`.
-   Configura el deserializador para que use el recurso y la clase adecuada.

## 💡 Tips de Implementación
-   **Nombres**: Carpetas en plural (`Products`), Modelos en singular (`Product`).
-   **CDATA**: Siempre usa CDATA en campos de texto para evitar errores con caracteres especiales en XML.
-   **Tipado**: Usa tipos de PHP 8 (promoted properties) en los constructores.
