<x-master title="Accueil">
    <h3> hello <?=$nom ;?> </h3> <br/> <!--sans blade-->
    {{$nom}} <!--utilisation blade-->
    <!--sans blade -->
    <h2>cours :</h2>
    <ul>
        <?php foreach($langages as $value) :?>
            <li> <?= $value ?></li>
        <?php endforeach; ?>
    </ul> 
    <br>
    <!--avec blade-->
    @unless(count($langages)>0) <!--on peut fait a place iunless empty-->
    pas de cours
    @else
    <table border="1" width="100%">
      <tr>
         <td> Cours </td>
      </tr>
        @foreach($langages as $value)
      <tr>
         <td> {{$value}} </td>
      </tr>
        @endforeach
    </table>
    @endunless


@isset($nom) <!--verifie si nom est existe dans memoire et si esgal a null si n'apas = null affiche contenu--> 
yeess
@endisset
<br>


@empty($age)<!--verifie si age est vide si il est vide affiche contenu -->
Nonn
@endempty
<br>


<!--condition switch-->
@switch($color)
   @case('red')
     Rouge
     @break
   @case('pink')
     Rose
     @break
   @default
     Color n'existe pas
@endswitch
<br>


<!--Calcule-->
{{$n1+$n2}}
<br>
<!--calcule code php-->
@php 
    $n3 = $n1+$n2
@endphp
{{$n3}}

</x-master>
