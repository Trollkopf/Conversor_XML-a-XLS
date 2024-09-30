<!DOCTYPE html>
<html>

<head>
    <title>XML to XLS Converter</title>
</head>

<body>
    <h1>XML to XLS Converter</h1>
    <form action="/convert" method="POST">
        @csrf
        URL: <input type="text" id="xml_url" name="xml_url" value=""><br><br>

        Nombre: <input type="text" id="xls_name" name="xls_name" value=""><br><br>

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
        <input type="checkbox" name="fields[]" value="url.es" checked> Enlace<br>
        <br>
        <button type="submit">Convertir</button>
    </form>
    <hr>
    <form action="/convert" method="POST">
        @csrf
        <input type="text" id="xml_url" name="xml_url"
            value="https://xml.redsp.net/file/403/23r917h0551/general-zone-1-kyero.xml" hidden>
        <input type="text" id="xls_name" name="xls_name" value="RedSP" hidden>
        <input type="checkbox" name="fields[]" value="id" checked hidden>
        <input type="checkbox" name="fields[]" value="date" checked hidden>
        <input type="checkbox" name="fields[]" value="ref" checked hidden>
        <input type="checkbox" name="fields[]" value="price" checked hidden>
        <input type="checkbox" name="fields[]" value="new_build" checked hidden>
        <input type="checkbox" name="fields[]" value="type" checked hidden>
        <input type="checkbox" name="fields[]" value="town" checked hidden>
        <input type="checkbox" name="fields[]" value="province" checked hidden>
        <input type="checkbox" name="fields[]" value="country" checked hidden>
        <input type="checkbox" name="fields[]" value="location_detail" checked hidden>
        <input type="checkbox" name="fields[]" value="beds" checked hidden>
        <input type="checkbox" name="fields[]" value="baths" checked hidden>
        <input type="checkbox" name="fields[]" value="pool" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked hidden>
        <button type="submit">RedSP</button>
    </form>
    <br>
    <form action="/convert" method="POST">
        @csrf
        <input type="text" id="xml_url" name="xml_url"
            value="https://xml.redsp.net/file/403/23r917h0551/special-zone-1-kyero.xml" hidden>
        <input type="text" id="xls_name" name="xls_name" value="RedSP_Especial" hidden>
        <input type="checkbox" name="fields[]" value="id" checked hidden>
        <input type="checkbox" name="fields[]" value="date" checked hidden>
        <input type="checkbox" name="fields[]" value="ref" checked hidden>
        <input type="checkbox" name="fields[]" value="price" checked hidden>
        <input type="checkbox" name="fields[]" value="new_build" checked hidden>
        <input type="checkbox" name="fields[]" value="type" checked hidden>
        <input type="checkbox" name="fields[]" value="town" checked hidden>
        <input type="checkbox" name="fields[]" value="province" checked hidden>
        <input type="checkbox" name="fields[]" value="country" checked hidden>
        <input type="checkbox" name="fields[]" value="location_detail" checked hidden>
        <input type="checkbox" name="fields[]" value="beds" checked hidden>
        <input type="checkbox" name="fields[]" value="baths" checked hidden>
        <input type="checkbox" name="fields[]" value="pool" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked hidden>
        <button type="submit">RedSP Especial</button>
    </form>
<br>
    <form action="/convert" method="POST">
        @csrf
        <input type="text" id="xml_url" name="xml_url"
            value="https://www.maisonsdemer.com/kyero/thinkspain/xml-export/" hidden>
        <input type="text" id="xls_name" name="xls_name" value="RedSP_Especial" hidden>
        <input type="checkbox" name="fields[]" value="id" checked hidden>
        <input type="checkbox" name="fields[]" value="date" checked hidden>
        <input type="checkbox" name="fields[]" value="ref" checked hidden>
        <input type="checkbox" name="fields[]" value="price" checked hidden>
        <input type="checkbox" name="fields[]" value="new_build" checked hidden>
        <input type="checkbox" name="fields[]" value="type" checked hidden>
        <input type="checkbox" name="fields[]" value="town" checked hidden>
        <input type="checkbox" name="fields[]" value="province" checked hidden>
        <input type="checkbox" name="fields[]" value="country" checked hidden>
        <input type="checkbox" name="fields[]" value="location_detail" checked hidden>
        <input type="checkbox" name="fields[]" value="beds" checked hidden>
        <input type="checkbox" name="fields[]" value="baths" checked hidden>
        <input type="checkbox" name="fields[]" value="pool" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked hidden>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked hidden>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked hidden>
        <input type="checkbox" name="fields[]" value="url.es" checked hidden>
        <button type="submit">Think Spain</button>
    </form>


</body>

</html>
