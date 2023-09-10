@extends('layouts.app')
@section('title', ' - Bienvenue')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="container-xxl">
                <div class="authentication-wrapper authentication-basic container-p-y">
                    <div class="authentication-inner">
                        <div class="title m-b-md">
                            <img src="data:image/png;base64,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ARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF7OuMPjAAALB0lEQVQZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4DrlSERAp0RIOBChRJwoTIIuF4ZEiHQGQECLlQoARcqg4Dr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"/>
                            {{-- <img class="rounded-circle shadow" src="{{ asset('img/logo_ges_restau.jpg') }}"/> --}}
                            <p><a class="btn btn-primary shadow" href="{{ route('login') }}">CONNEXION</a></p>
                        </div>
                        <p>Powered by kbertrant</p>
                        <span class="copyright">Copyright &copy; Votre facturier2.0 2023</span>
                    </div>
                </div>
            </div>
            
        </div>
@endsection