@extends('layouts.master_index')
@section('pagina')
<div class="container">
  <div class="row row-cols-3"> <!-- Itens na tela 3 colunas -->
    <div class="col" style="text-align:center; border-left: solid; margin-top: 5%"> <!--Item -->
        <img class="img-fluid" src="img/cao.jpg" alt="imagem" width="150" height="150" style="border-radius: 10%; border: solid"/><br>
        <label class="letraPet" style="font-weight: bold; font-size: 25px;">{{__('Filhote de cachorro')}}</label><br>
        <label class="letraPet" style="font-weight: bold; font-size: 20px;"> <i class="fas fa-medal"></i> {{__('Raça:')}} </label><label class="letraPet" style="font-size: 20px; "> {{__('Lulu')}}</label><br>
        <label class="letraPet" style="font-weight: bold; font-size: 20px;"> <i class="fas fa-star-of-life"></i> {{__('Idade:')}} </label><label class="letraPet" style="font-size: 20px; "> {{__('1 ano(s)')}}</label><br>
        <label class="letraPet" style="font-weight: bold; font-size: 20px;"> <i class="fas fa-money-bill-wave"></i> {{__('Valor:')}} </label><label class="letraPet" style="font-size: 20px; color: OrangeRed"> {{__('R$ 0.00')}}</label><br>
        <label class="letraPet" style="font-weight: bold; font-size: 20px; color: MediumSeaGreen">{{__('Doação')}}</label><br>
        <a href="/maisdetalhes"><button class="btn btn-warning">Mais Detalhes</button></a>
    </div> 
    <!-- Fim do Item -->
    
    
  </div> <!-- Fim dos Itens na tela -->
</div>

@endsection