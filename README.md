# XML to XLS Converter

Esta aplicación en Laravel convierte un archivo XML a un archivo XLS, permitiendo a los usuarios seleccionar los campos específicos que desean importar.

## Autor

Max Serratosa - [Trollkopf](https://github.com/Trollkopf)

## Requisitos

- PHP >= 7.3
- Composer
- Extensiones de PHP: `mbstring`, `xml`, `zip`
- Node.js (para Laravel Mix)

## Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/Trollkopf/xml-to-xls.git
   cd xml-to-xls
   ```

1. Instala las dependencias de Composer:

   ```bash
   composer install
   ```
1. Copia el archivo .env.example a .env y configura tu entorno:
    ``` bash
    cp .env.example .env
    ```
1. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```
1. instala las dependecias de Node.js y compila los assets:
    ```bash
    npm install
    npm run dev
    ```

## Uso
1. Inicia el servidor de desarrollo de Laravel
    ```bash
    php artisan serve
    ```
1. Abre tu navegador y ve a http://localhost:8000.
1. La aplicación está pensada para funcionar con los xml proporcionados por [RedSP](https://redsp.net), pero se puede personalizar facilmente teniendo en cuenta las siguientes rutas y acciones:

## Personalización

### Index.blade.php:

Modificar los inputs para recibir del xml, siendo value el atributo:
    
    Index.blade.php = <input type="checkbox" name="fields[]" value="id" checked> ID<br> 
    xml = <id>ATRIBUTO</id>

Pueden introducirse los atributos anidados de la siguiente forma:

    Index.blade.php =  <input type="checkbox" name="fields[]" value="surface_area.built" checked> Built<br>
    xml = <surface_area>
            <built>ATRIBUTO</built>
          </surface_area>

### Manejo de Booleanos

Los campos booleanos (`0` y `1`) se convierten a `Sí` y `No` utilizando el array $booleanFields en el controlador `XmlToXlsController`.

### Formato de Precios

Los precios se formatean como moneda con el símbolo € y separadores de miles.

## Contribuciones

Las contribuciones son bienvenidas. Por favor, crea un fork del repositorio y abre un pull request con tus cambios.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

