
-- Table yang dibutuhkan adalah pivot table antara pokemon dan element
-- element_pokemon_tb
-- + pokemon_id
-- + element_id

-- Menampilkan semua pokemon
SELECT * FROM pokemon_tb

-- Menampilkan pokemon berdasarkan elemen
SELECT * FROM element_pokemon_tb 
LEFT JOIN pokemon_tb ON pokemon_tb.id = element_pokemon_tb.pokemon_id
WHERE element_pokemon_tb.element_id = 1

-- Menampilkan semua pokemon dengan elemen nya
SELECT * FROM element_pokemon_tb 
LEFT JOIN pokemon_tb ON pokemon_tb.id = element_pokemon_tb.pokemon_id
LEFT JOIN element_tb ON element_tb.id = element_pokemon_tb.element_id