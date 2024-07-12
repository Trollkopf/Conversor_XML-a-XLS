<!DOCTYPE html>
<html>
<head>
    <title>XML to XLS Converter</title>
</head>
<body>
    <h1>XML to XLS Converter</h1>
    <form action="{{ route('convert') }}" method="POST">
        @csrf
        <label for="xml_url">URL:</label>
        <input type="text" id="xml_url" name="xml_url" value="" required><br><br>

        <label for="xls_name">Nombre para el Archivo de Excel:</label>
        <input type="text" id="xls_name" name="xls_name" value="" required><br><br>

        <label for="fields">Select fields to import:</label><br>
        <input type="checkbox" name="fields[]" value="id" checked> ID<br>
        <input type="checkbox" name="fields[]" value="date" checked> Fecha<br>
        <input type="checkbox" name="fields[]" value="ref" checked> Ref<br>
        <input type="checkbox" name="fields[]" value="price" checked> Tarifa<br>
        <input type="checkbox" name="fields[]" value="new_build" checked> Nueva Construcción<br>
        <input type="checkbox" name="fields[]" value="type" checked> Tipo<br>
        <input type="checkbox" name="fields[]" value="town" checked> Ciudad<br>
        <input type="checkbox" name="fields[]" value="province" checked> Provincia<br>
        <input type="checkbox" name="fields[]" value="country" checked> País<br>
        <input type="checkbox" name="fields[]" value="location_detail" checked> Localización<br>
        <input type="checkbox" name="fields[]" value="beds" checked> Dormitorios<br>
        <input type="checkbox" name="fields[]" value="baths" checked> Aseos<br>
        <input type="checkbox" name="fields[]" value="pool" checked> Piscina<br>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked> Construcción<br>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked> Parcela<br>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked> Consumo<br>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked> Emisiones<br>
        <br>
        <button type="submit">Convertir</button>
    </form>
</body>
</html>
