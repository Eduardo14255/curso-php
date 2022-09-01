<div class="titulo">Interface</div>

 <?php
 interface Animal{
     function respirar();
 }

 interface Mamifero{
     function mamar();
 }

 interface Canino extends Animal, Mamifero{
     function latir(): string;
 }

 class Cachorro implements Canino {
     function respirar(){
         return "Irei usar oxigênio!";
     }

     function latir(): string{
         return "Au Au";
     }

     function mamar(){
         return "Irei usar leite!";
     }
    }

 $animal = new Cachorro();
 echo $animal1->respirar(), '<br>';
 echo $animal1->latir(), '<br>';
 echo $animal1->mamar(), '<br>';

 echo "Fim!";