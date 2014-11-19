<?php

class Program
{
    // Méthode createRenderer (à créer)

   // define('RENDERER_TYPE_STRING' , 'string');
   // define('RENDERER_TYPE_STRING' , 'svg');
    //$stringRenderer = new StringRenderer () ;
   // $svgRenderer = new SvgRenderer () ;

    $typeRenderer ;

    public function createRenderer($typeRenderer)
    {
        if($typeRenderer === RENDERER_TYPE_STRING)
        {
            $rendererObj = new StringRenderer() ;           
        }
        else 
        {
            $rendererObj = new SvgRenderer() ;       
        }

        return  $rendererObj ;
    }

    


    public function run(Renderer $renderer)
    {
        // Création et initialisation d'un rectangle.
        // - origine: 50, 20
        // - couleur: firebrick
        // - taille: 200, 100



		// Création et initialisation d'une ellipse.
        // - centre: 600, 180
        // - couleur: seagreen
        // - rayon: 40, 80



        // Création et initialisation d'un carré.
        // - origine: 350, 200
        // - couleur: deepskyblue
        // - opacité: 0.5
        // - taille: 100



        // Création et initialisation d'un cercle.
        // - centre: 300, 150
        // - couleur: gold
        // - opacité: 0.33
        // - rayon: 180



        // Ajout des différents objets géométriques au moteur graphique.





		// Exécution du moteur graphique.
        


    }
}