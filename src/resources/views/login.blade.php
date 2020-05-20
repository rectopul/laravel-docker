@extends('layouts.app')
<!--Title-->
@section('title', 'Login')
<!--Content-->
@section('content')
<div class="row justify-content-center mt-5">
    <aside class="col-sm-4">
        <div class="card">
            <div class="card-header">WoodPrime</div>
            <article class="card-body">
                <h4 class="card-title text-center mb-4 mt-1">Login</h4>
                <hr>
                <p class="text-success text-center">Informações de login</p>
                <form>
                    <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email or login" type="email">
                    </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="******" type="password">
                    </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login"> Login  </button>
                    </div> <!-- form-group// -->
                    <p class="text-center"><a href="#" class="btn">Esqueceu sua senha?</a></p>
                </form>
            </article>
        </div> <!-- card.// -->

    </aside> <!-- col.// -->
</div> <!-- row // -->
@endsection