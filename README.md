# PHP client for PrestaShop Webservices

This library allows you to perform requests to a PrestaShop instance using the [Webservice API](https://devdocs.prestashop.com/8/development/webservice/).

## Installation

Install the library using composer:

```
composer require josalba/prestashop-webservice-lib
```

## Usage

La clase `Get` se encuentra disponible para múltiples recursos como:
- `Products`
- `Orders` (antes Invoices)
- `StockAvailables`
- `Categories`
- `Carts`
- `Manufacturers`
- `Addresses`
- `Countries`
- `Combinations`
- `SpecificPrices`
- `Images`

Se utiliza para realizar solicitudes GET a la API de PrestaShop. Aquí te mostramos cómo usarla.

### Ejemplo con StockAvailables

```php
use prestashop\prestashopWebserviceLib\StockAvailables\Application\Get;
use prestashop\prestashopWebserviceLib\Shared\Domain\Display\DisplayFull;
use prestashop\prestashopWebserviceLib\StockAvailables\Domain\Filter;

$get = new Get('https://tu-tienda.com/api/', 'TU_TOKEN_API');
$display = new DisplayFull();
$filter = new Filter(id: '1');

$result = $get($display, $filter);
// $result es una instancia de PrestashopStockAvailable
```

### Ejemplo con Categories

```php
use prestashop\prestashopWebserviceLib\Categories\Application\Get;
use prestashop\prestashopWebserviceLib\Categories\Domain\Display;

$get = new Get('https://tu-tienda.com/api/', 'TU_TOKEN_API');
$display = new Display(id: true, name: true, active: true);

$result = $get($display);
// $result es una instancia de PrestashopCategory
```

## Recursos Disponibles

La clase `Resources` en `Shared\Domain\Resources.php` contiene constantes para los **69 recursos oficiales** de PrestaShop, lo que facilita realizar consultas personalizadas o extender la librería.

## Método get

El método `__invoke()` se utiliza para obtener los elementos disponibles. Evoca internamente un método `getRaw()` para obtener la respuesta en bruto de la API y la deserializa al objeto correspondiente.

### Parámetros

Este método acepta:

- `Display $display`: Determina qué campos devolver. Puedes usar `DisplayFull` para todos o una instancia de `Display` específica del recurso para campos selectivos.
- `Filter $filter` (opcional): Criterios de filtrado.

## Método put (Solo StockAvailables por ahora)

El método `__invoke()` se utiliza para actualizar el objeto.

```php
use prestashop\prestashopWebserviceLib\StockAvailables\Application\Put;
use prestashop\prestashopWebserviceLib\StockAvailables\Domain\StockAvailable;
use prestashop\prestashopWebserviceLib\StockAvailables\Domain\PrestashopStockAvailableUpdate;
use prestashop\prestashopWebserviceLib\Shared\Domain\ShopParam;

$put = new Put('url','token');
$item = new PrestashopStockAvailableUpdate([new StockAvailable(id: 1, quantity: 10)]);
$shopParam = new ShopParam(shopId: 1); 

$result = $put($item, null, $shopParam);
```

## Desarrollo y Contribución

Si deseas contribuir al proyecto o entender mejor su arquitectura interna, consulta nuestra guía técnica:

- **[Technical Skill Guide](skills/prestashop-webservice-lib/SKILL.md)**: Detalles sobre arquitectura DDD, cómo añadir recursos y estándares de testing.

## License

This library is released under the [OSL-3.0 license](LICENSE.md).


