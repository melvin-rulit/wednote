<template>


    <div class="head">
      <div class="logo">

          <a href="" class="logon">WedNote</a>
<!--          <h1 class="logon">WedNote</h1>-->
      </div>

    <div class="Mmenu">

        <router-link to="/"  exact class="nav-link">главная</router-link>
        <router-link to="/paty" class="nav-link">подготовка праздника</router-link>
        <router-link to="/getCatalog" class="nav-link">каталог</router-link>
        <router-link to="/men" class="nav-link">молодожёны</router-link>
        <router-link to="/otchety" class="nav-link">отчёты</router-link>
        <router-link to="/news" class="nav-link">новости</router-link>
        <router-link to="/contakty" class="nav-link">контакты</router-link>

<div>
    <router-link to="choose-role"  class="nav-link">регистрация</router-link>
    <router-link to="choose-role" @click.prevent="loGout()" class="nav-link "><img src="/img/Icon_door.png" alt="exit"></router-link>

</div>


    </div>

</div>
</template>

<script>
export default {

    methods: {
        loGout() {

            axios.get("/logout/submit").then(response => {
                auth.logout();
                delete axios.defaults.headers.common['Authorization'];
                window.location.replace("/");

            });
        }
    }
}
</script>

<style>


.active{
    /*Делам цвет активных ссылок*/
   color: #d72784;
}

</style>
