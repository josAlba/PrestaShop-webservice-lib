# PHP client for PrestaShop Webservices

This library allows you to perform requests to a PrestaShop instance using the [Webservice API](https://devdocs.prestashop.com/8/development/webservice/).

## Installation

Install the library using composer:

```
composer require josalba/prestashop-webservice-lib
```

## Usage

La clase `Get` se encuentra en el los diferentes paquetes (Combinations, Products, StockAvaliable) y se utiliza para realizar solicitudes GET a la API de PrestaShop. Aquí te mostramos cómo usarla.

Ejemplo con StockAvaliables.
```php
use prestashop\prestashopWebserviceLib\StockAvaliables\Application\Get;
use prestashop\prestashopWebserviceLib\Shared\Domain\DisplayFull;
use prestashop\prestashopWebserviceLib\Shared\Domain\Filter;
```

## Método getAll

El método `__invoke()` se utiliza para obtener todos los elementos disponibles. Evoca internalmente un método `getRaw()` para obtener la respuesta en bruto de la API y la deserializa al objeto.

```php
$get = new Get('url','token');
$display = new DisplayFull();
$filter = new Filter(/* Parámetros del constructor */);

$result = $get($display, $filter);
```

### Parámetros

Este método acepta dos parámetros:

- `Display $display`: Este parámetro determina la cantidad de detalles que se deben devolver. Si deseas obtener todos los detalles, puedes usar la implementación del `DisplayFull`.

- `Filter $filter` (opcional): Este parámetro se utiliza para especificar criterios de filtrado. Si lo dejas vacío, el método devolverá todos los recursos disponibles.

## License

This library is released under the [OSL-3.0 license](LICENSE.md).


