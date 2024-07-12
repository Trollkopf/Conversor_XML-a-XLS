<!DOCTYPE html>
<html>
<head>
    <title>XML to XLS Converter</title>
</head>
<body>
    <h1>XML to XLS Converter</h1>
    <form action="{{ route('convert') }}" method="POST">
        @csrf
        <label for="xml_url">REDESP:</label>
        <input type="text" id="xml_url" name="xml_url" value="https://xml.redsp.net/file/403/23r917h0551/general-zone-1-kyero.xml" required><br><br>

        <label for="fields">Select fields to import:</label><br>
        <input type="checkbox" name="fields[]" value="id" checked> ID<br>
        <input type="checkbox" name="fields[]" value="date" checked> Date<br>
        <input type="checkbox" name="fields[]" value="ref" checked> Ref<br>
        <input type="checkbox" name="fields[]" value="price" checked> Price<br>
        <input type="checkbox" name="fields[]" value="new_build" checked> New Build<br>
        <input type="checkbox" name="fields[]" value="type" checked> Type<br>
        <input type="checkbox" name="fields[]" value="town" checked> Town<br>
        <input type="checkbox" name="fields[]" value="province" checked> Province<br>
        <input type="checkbox" name="fields[]" value="country" checked> Country<br>
        <input type="checkbox" name="fields[]" value="location_detail" checked> Location Detail<br>
        <input type="checkbox" name="fields[]" value="beds" checked> Beds<br>
        <input type="checkbox" name="fields[]" value="baths" checked> Baths<br>
        <input type="checkbox" name="fields[]" value="pool" checked> Pool<br>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked> Built<br>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked> Plot<br>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked> Consumption<br>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked> Emissions<br>
        <br>
        <button type="submit">Convert</button>
    </form>
    <form action="{{ route('convert') }}" method="POST">
        @csrf
        <label for="xml_url">REDESP ESPECIAL:</label>
        <input type="text" id="xml_url" name="xml_url" value="https://xml.redsp.net/file/403/23r917h0551/special-zone-1-kyero.xml" required><br><br>

        <label for="fields">Select fields to import:</label><br>
        <input type="checkbox" name="fields[]" value="id" checked> ID<br>
        <input type="checkbox" name="fields[]" value="date" checked> Date<br>
        <input type="checkbox" name="fields[]" value="ref" checked> Ref<br>
        <input type="checkbox" name="fields[]" value="price" checked> Price<br>
        <input type="checkbox" name="fields[]" value="new_build" checked> New Build<br>
        <input type="checkbox" name="fields[]" value="type" checked> Type<br>
        <input type="checkbox" name="fields[]" value="town" checked> Town<br>
        <input type="checkbox" name="fields[]" value="province" checked> Province<br>
        <input type="checkbox" name="fields[]" value="country" checked> Country<br>
        <input type="checkbox" name="fields[]" value="location_detail" checked> Location Detail<br>
        <input type="checkbox" name="fields[]" value="beds" checked> Beds<br>
        <input type="checkbox" name="fields[]" value="baths" checked> Baths<br>
        <input type="checkbox" name="fields[]" value="pool" checked> Pool<br>
        <input type="checkbox" name="fields[]" value="surface_area.built" checked> Built<br>
        <input type="checkbox" name="fields[]" value="surface_area.plot" checked> Plot<br>
        <input type="checkbox" name="fields[]" value="energy_rating.consumption" checked> Consumption<br>
        <input type="checkbox" name="fields[]" value="energy_rating.emissions" checked> Emissions<br>
        <br>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
