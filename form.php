<h2>Add a city :</h2>
<form action="addCity.php" class="addForm" method="POST">
    <label for="city">City :</label>
    <input type="text" name="city" id="city" placeholder="Ex: Arlon" required>

    <label for="haut">Temp Max :</label>
    <input type="number" id="haut" name="haut" required>

    <label for="bas">Temp Min :</label>
    <input type="number" id="bas" name="bas" required>

    <input type="submit" value="Add">
</form>