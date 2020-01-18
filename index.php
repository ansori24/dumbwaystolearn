<?php
    include 'connection.php';

    function getAllPokemon() {
        global $connection;

        $query = "SELECT * FROM pokemon_tb";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($connection).
            " - ".mysqli_error($connection));
        }
        while($pokemon = mysqli_fetch_assoc($result)) {
            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }
    
    function getAllElement() {
        global $connection;

        $query = "SELECT * FROM element_tb";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($connection).
            " - ".mysqli_error($connection));
        }

        return $result;
    }
?>

<html>
  <head>
    <title>POKEDUMB Find</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-200">
    <div class="container max-w-xl mx-auto flex">
        <form action="add_pokemon.php" class="w-1/2 p-4 bg-white rounded-lg mx-2" method="POST">
            <div class=" flex flex-col">
                <label class="mt-2 text-sm uppercase font-semibold text-gray-700">Pokemon Name</label>
                <input class="py-2 rounded px-4 bg-gray-200" type="text" name="name" required>
            </div>
            <div class=" flex flex-col">
                <label class="mt-2 text-sm uppercase font-semibold text-gray-700">Strength</label>
                <input class="py-2 rounded px-4 bg-gray-200" type="text" name="str" required>
            </div>
            <div class=" flex flex-col">
                <label class="mt-2 text-sm uppercase font-semibold text-gray-700">Defence</label>
                <input class="py-2 rounded px-4 bg-gray-200" type="text" name="def" required>
            </div>
            <div class=" flex flex-col">
                <label class="mt-2 text-sm uppercase font-semibold text-gray-700">Photo</label>
                <input class="py-2 rounded px-4 bg-gray-200" type="text" name="photo" required>
            </div>
            <button class="bg-blue-400 text-white mt-2 rounded px-4 py-2" type="submit">Add Pokemon</button>
        </form>
        <form action="add_element.php" class="w-1/2 p-4 bg-white rounded-lg mx-2" method="POST">
            <div class=" flex flex-col">
                <label class="mt-2 text-sm uppercase font-semibold text-gray-700">Element Name</label>
                <input class="py-2 rounded px-4 bg-gray-200" type="text" name="element" required>
            </div>
            <button class="bg-green-700 text-white mt-2 rounded px-4 py-2" type="submit">Add Element</button>
        </form>
    </div>
    <div class="container max-w-xl mx-auto">
        <ul class="flex">
            <?php
                foreach (getAllElement() as $element) {
            ?>
                <li class="bg-green-700 text-white text-xs leading-loose px-3 rounded-full mx-1 uppercase tracking-wide font-semibold"><?= $element['name'] ?></li>
            <?php
                }
            ?>
        </ul>
        
        <ul class="flex flex-wrap">
            <?php
                foreach (getAllPokemon() as $pokemon) {
            ?>
                <li class="mt-4 mx-2 px-4 py-6 rounded-lg shadow-lg bg-white">
                    <a href="delete_pokemon.php?id=<?= $pokemon['id'] ?>">X</a>
                    <img src="<?= $pokemon['photo']; ?>" alt="<?= $pokemon['name']; ?>" width="100">
                    <span><?= $pokemon['name']; ?></span>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
  </body>
</html>