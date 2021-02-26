

<div class="note">
    <a href="/mynote" class="mynote">Мой блокнот</a>
    <a href="" class="spl_bt1"></a>
    <div class="spldv1">

        <div class="spldv2">
            <!--===================== Список дел =====================-->
            <h3><a href="">список дел</a></h3>
            <p>
                @if(!Auth::check())
                <router-link to="/joblist" class="nav-link">назначить дату свадьбы</router-link>
{{--                    <a href="">назначить дату свадьбы</a><br>--}}
                    <a href="">спланировать бюджет</a><br>
                    <a href="">заказать кольца</a><br>
                    <a href="">выбрать платье</a><br>
                    <a href="">составить список гостей</a><br>
                @else

{{--                    @foreach($jobs as $job)--}}
                        <a href="">hghghg</a><br>
{{--                    @endforeach--}}

                @endif
            </p>
        </div>


   </div>




    <head-component></head-component>



{{--    @if(Auth::guard('admin')->check())--}}

{{--        <h3><a href="{{route('admin.index')}}" style="color: red;">Управление каталогом</a></h3>--}}

{{--    @endif--}}
</div>






