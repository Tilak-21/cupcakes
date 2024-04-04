<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
<form action="process.php" id="form" method="post" name="cupcakeForm">
    <section class="mb-4"><label class="required" for="username" id="usernamelogin">Your Name:</label><br />
        <input class="form-control input-default " id="username" name="username" placeholder="" required="" type="text" />
        <div class="error"></div>
    </section>

    <section class="mb-4">
        <section><input id="flexCheckDefault1" name="flavour[]" type="checkbox" value="The Grasshopper" /> <label class="form-check-label" for="flexCheckDefault1"> The Grasshopper </label></section>

        <section><input id="flexCheckDefault2" name="flavour[]" type="checkbox" value="Whiskey Maple Bacon" /> <label class="form-check-label" for="flexCheckDefault2"> Whiskey Maple Bacon </label></section>

        <section><input id="flexCheckDefault3" name="flavour[]" type="checkbox" value="Salted Caramel Cupcake" /> <label class="form-check-label" for="flexCheckDefault3"> Salted Caramel Cupcake </label></section>

        <section><input id="flexCheckDefault4" name="flavour[]" type="checkbox" value="Red Velvet" /> <label class="form-check-label" for="flexCheckDefault4"> Red Velvet </label></section>

        <section><input id="flexCheckDefault5" name="flavour[]" type="checkbox" value="Lemon Drop" /> <label class="form-check-label" for="flexCheckDefault5"> Lemon Drop </label></section>

        <section><input id="flexCheckDefault6" name="flavour[]" type="checkbox" value="Tiramisu" /> <label class="form-check-label" for="flexCheckDefault6"> Tiramisu </label></section>

        <section><input id="flexCheckDefault7" name="flavour[]" type="checkbox" value="Not Actively Searching" /> <label class="form-check-label" for="flexCheckDefault7"> Carrot Walnut </label></section>
    </section>





    </div>
    </div>

    <section class="text-center"><button class="mt-3 dashButtonLinks" type="submit">Submit</button></section>
</form>


</body>
</html>



