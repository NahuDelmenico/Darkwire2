<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('announcements')->insert([
            [
                'title' => 'Lanzamiento GTA VI',
                'subtitle' => 'Novedades sobre el lanzamiento del juego¿Que nos espera?', 
                'description' => 
                
                'GTA 6 se desarrollará en Vice City, una reinvención moderna y vibrante de la ciudad inspirada en Miami. Esta vez, el mapa será más grande que nunca, abarcando no solo la ciudad principal sino también zonas rurales, islas cercanas y un sistema de clima dinámico con efectos en tiempo real. Las calles, edificios y la vida urbana evolucionarán con el paso del tiempo dentro del juego, haciendo que cada partida se sienta diferente.


Por primera vez en la historia de la saga, GTA 6 contará con dos protagonistas jugables, Lucia y Jason, una pareja con un pasado delictivo que recuerda a Bonnie y Clyde. Los jugadores podrán alternar entre ambos personajes en distintas misiones, explorando sus historias individuales y cómo sus decisiones afectan la narrativa.


El motor gráfico ha sido completamente renovado para ofrecer un nivel de realismo sorprendente: desde las expresiones faciales hasta la física de los vehículos y el comportamiento de los NPCs. La inteligencia artificial ha sido mejorada para reaccionar a los cambios del entorno y a las acciones del jugador, prometiendo una experiencia más inmersiva.


Aunque Rockstar aún no ha confirmado una fecha exacta de lanzamiento, se espera que GTA 6 llegue a las consolas de nueva generación en algún punto de 2025, con una versión para PC prevista posteriormente.


GTA 6 no solo busca superar a sus predecesores, sino redefinir el estándar de los juegos de mundo abierto. Con estos nuevos detalles, la anticipación de los fans ha alcanzado un nuevo pico. ¿Estás listo para volver al crimen?',

                
                'author' => 'Nahuel Delmenico',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                
                'title' => 'Nuevo mapa en CSGO',
                'subtitle' => 'Comno es y que se espera del nuevo mapa de CSGO', 
                'description' => 
                
                'Valve ha sorprendido a la comunidad de Counter-Strike con el anuncio de un nuevo mapa oficial que ya está disponible en la última actualización de CS:GO. El nuevo escenario, llamado "Cascade", introduce una ambientación montañosa y un diseño vertical que cambia significativamente la dinámica de juego a la que están acostumbrados los jugadores.


                Cascade mezcla zonas abiertas con pasillos estrechos, permitiendo tanto el juego táctico a larga distancia como enfrentamientos intensos en espacios cerrados. Su diseño está pensado para fomentar la cooperación en equipo y la estrategia, ya que ofrece múltiples rutas de entrada y puntos elevados que requieren coordinación y control del mapa.


                Los desarrolladores aseguran que este nuevo mapa ha sido diseñado teniendo en cuenta el juego competitivo, con equilibrio entre ambos lados y puntos clave que recompensan el dominio táctico. Además, su estética única y el nivel de detalle visual lo convierten en uno de los mapas más inmersivos lanzados en los últimos años.


                La comunidad ya ha comenzado a explorar sus posibilidades, y muchos streamers y equipos profesionales lo están probando en sus partidas privadas. A medida que los jugadores se adapten, se espera que Cascade forme parte del grupo de mapas oficiales en los torneos más importantes de la escena.


                Con este lanzamiento, Valve demuestra que sigue apostando fuerte por la evolución de CS:GO, manteniendo el juego fresco y competitivo más de una década después de su lanzamiento.',


                
                'author' => 'Nahuel Delmenico',
                'created_at' => now(),
                'updated_at' =>now()
            ]
                
        ]);
    }
}
