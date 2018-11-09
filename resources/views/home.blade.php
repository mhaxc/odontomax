@extends('adminlte::page')

@section('title','Odontomax')

@section('content_header')

@stop

@section('content')


<div class="box ">
    <div class="col-lg-3 col-6">
        <!-- small box -->

        <div class="small-box bg-green">
            <div class="inner">


                <h3>{{ $contagens[0]->pacientes}}</h3>
                <h4>Pacientes</h4>

            </div>

            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('paciente.index')}}" class="small-box-footer">Pacientes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>





    <div class="col-lg-3 col-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $contagens[0]->dentistas }}</h3>

                <h4>Dentistas</h4>

            </div>
            <div class="icon">
                <i class="ion-stats-bars"></i>
            </div>
            <a href="{{route('dentista.index')}}" class="small-box-footer">Dentistas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>65</h3>

                <h4>Consultas</h4>
            </div>
            <div class="icon ">
                <i class="ion ion-pricetags"></i>
            </div>
            <a href="{{route('consulta.index')}}" class="small-box-footer">Consultas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>




    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>65</h3>

                <h4>Convenios</h4>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('convenio.index')}}" class="small-box-footer">Convenios <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-reply"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg bg-black">
            <div class="inner">
                <h3>65</h3>

                <h4>Agendas</h4>
            </div>
            <div class="icon">
                <i class="ion-calendar"></i>
            </div>
            <a href="{{route('agenda.index')}}" class="small-box-footer">Agendas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>65</h3>

                <h4>Medicamentos</h4>
            </div>
            <div class="icon">
                <i class="ion-android-apps"></i>
            </div>
            <a href="{{route('medicamento.index')}}" class="small-box-footer">Medicamentos <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-fuchsia">
            <div class="inner">
                <h3>65</h3>

                <h4>Consultorios</h4>
            </div>
            <div class="icon">
                <i class="ion-home"></i>
            </div>
            <a href="{{route('consultorio.index')}}" class="small-box-footer">Consultorios <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>



</div>

@stop