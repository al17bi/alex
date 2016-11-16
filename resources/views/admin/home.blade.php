@extends('admin.layouts.app')
@section('htmlheader_title')Администратор@endsection
@section('contentheader_title')Начальная страница@endsection
@section('contentheader_description')отображение первичных данных и отработка применяемых методов@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="lobipanel-1" class="panel panel-warning">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        {{ trans('adminlte_lang::message.logged') }}
                    </div>
                </div>
                <div id="lobipanel-2" class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Dashboard
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                                <span class="label label-info">Информация</span>
                                05.11.2016 - сайт <a href="https://mynew.kyivgaz.ua/Account/Login">ДП
                                    «КиївГазЕнерджи»</a>
                                по улице Миколайчука Ивана дом 13 кв. 78
                                Вход в личный кабинет user - 8001708171 password - al1702bi
                                Задолженность на 01.11.2016 - 217,67 грн.
                                Оплачена через ПравтБанк.
                                Квитанция <a href="../../../storage/app/public/Mikola/kvitanc_gas_01_11_2016.pdf">gas_01_11_2016.pdf</a>
                            </li>
                            <li>
                                Выполнен платеж за электроенергию по Миколайчука
                                данные по счетчику 17526 за 11.11.2016
                                сумма начисленая - 212.63 грн.
                                квитанция квитанция_за_эл_энергию11_11_2016.png
                            </li>
                            <li>
                                Выполнен платеж за электроенергию по Набарежной
                                данные по счетчику 7477 за 05.11.2016
                                сумма начисленая - 69.99 грн.
                                квитанция квитанция_за_эл_энергию11_11_2016.png
                            </li>
                            <li>
                                11.11.2016 - сайт <a href="https://mynew.kyivgaz.ua/Account/Login">ДП
                                    «КиївГазЕнерджи»</a>
                                по улице Днепровская набережная дом 5-а кв. 302
                                Вход в личный кабинет user - 8001728601 password - al1702bi
                                Задолженность на 01.11.2016 - 50,39 грн.
                                Оплачена через ПравтБанк.
                                Квитанция <a href="../../../storage/app/public/Mikola/kvitanc_gas_01_11_2016.pdf">gas_01_11_2016.pdf</a>
                            </li>
                            <li>
                                24_09_2016
                                квитанция об оплате за ЦЕНТРАЛІЗОВАНЕ ПОСТАЧАННЯ ГАРЯЧОЇ ВОДИ - 415,50
                                ЛічNo1 Попер-146 Поточ-151 Сплач-5куб/кВт
                                13_10_2016
                                період:01.09.2016-01.10.2016
                                о/р:051091303020100
                                квитанция об оплате за ЦЕНТРАЛІЗОВАНЕ ПОСТАЧАННЯ ГАРЯЧОЇ ВОДИ - 83,10
                                ЛічNo1 Попер-75 Поточ-74 Сплач-5куб/кВт
                            </li>
                            <li>
                                11.11.2016 - сайт <a https://ok-te-home.kyivenergo.ua/userhome>КИЇВЕНЕРГО, 2016</a>
                                по улице Миколайчука Ивана дом 13 кв. 78
                                Вход в личный кабинет:
                                https://ok-te-home.kyivenergo.ua
                                user - alexbirukov@gmail.com
                                password - "Vfhbyf_170261"user - 8001728601 password - al1702bi
                                Задолженность на 01.11.2016 - 536.55 грн
                                Оплачена через ПравтБанк.
                                Квитанция <a href="../../../storage/app/public/Mikola/kvitanc_gas_01_11_2016.pdf">gas_01_11_2016.pdf</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

