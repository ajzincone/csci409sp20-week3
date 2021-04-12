<html>
<form method="POST" action="/hotels/store">
    @csrf

    <!-- Equivalent to... -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="address1">Address 1:</label><br>
    <input type="text" id="address_1" name="address1">
    <label for="address2">Address 2:</label><br>
    <input type="text" id="address_2" name="address2">
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city">
    <label for="state">State:</label><br>
    <input type="text" id="state" name="state">
    <label for="zip">Zip:</label><br>
    <input type="text" id="zip" name="zip">
    <label for="description">Description: </label><br>
    <input type="text" id="description" name="description">
    <label for="image">Image: </label><br>
    <input type="text" id="image" name="image">
    <input id="submit" type="submit" name="submit" value="Login">
</form>
</html>
