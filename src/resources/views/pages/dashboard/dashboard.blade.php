@extends('layouts.app')
<!--Title-->
@section('title', 'Administração')
<!--Content-->
@section('content')
<!-- Just an image -->
@yield('nav', View::make('components.navbar'))
<div class="row justify-content-center mt-5">
    @yield('sidebar', View::make('components.sidebar'))

    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-customization" role="tabpanel" aria-labelledby="v-pills-customization-tab">
                Personalização.
            </div> <!-- Personalização.// -->

            <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">
                Produto
            </div> <!-- Produto.// -->
            
            <div class="tab-pane fade" id="v-pills-searchCustomization" role="tabpanel" aria-labelledby="v-pills-searchCustomization-tab">
                Buscar personalização
            </div> <!-- Buscar personalização.// -->

            <div class="tab-pane fade" id="v-pills-searchProduct" role="tabpanel" aria-labelledby="v-pills-searchProduct-tab">
                Buscar produto
            </div> <!-- Buscar produto.// -->

            <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab">
                Usuários
            </div> <!-- Buscar Usuários.// -->
        </div>
    </div> <!-- col.// -->
</div> <!-- row // -->
@endsection