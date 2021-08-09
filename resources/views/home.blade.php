@extends('layout')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light approximation">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">NetherCraft Project</h1>
            <p class="lead font-weight-normal">NetherCraft Project - это Minecraft по-новому!</p>
            <p class="font-weight-normal">Адрес сервера: <strong>Play.NetherCraft.Fun</strong></p>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="height: 500px">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden approximation">
            <div class="my-3 py-3">
                <h2 class="display-5"><strong>Описание доната</strong></h2>
                <p class="lead">Здесь вы можете посмотреть возможности доната, его описание и прочее.</p>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden approximation">
            <div class="my-3 p-3">
                <h2 class="display-5"><strong>Магазин</strong></h2>
                <p class="lead">Покупка доната и прочих услуг.</p>
            </div>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden approximation">
            <div class="my-3 py-3">
                <h2 class="display-5"><strong>Техническая поддержка</strong></h2>
                <p class="lead">Если что-то пошло не так, то техническая поддержка отвечает в течение 2-х часов!</p>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden approximation blur">
            <div class="my-3 p-3">
                <h2 class="display-5"><strong>Инструкции</strong></h2>
                <p class="lead">В этом разделе все возможные инструкции ко всем системам проекта.</p>
            </div>
        </div>
    </div>
@endsection
