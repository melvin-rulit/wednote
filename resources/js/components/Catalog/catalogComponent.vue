<template>
<div class="container">
    <div class="row">
        <div class="col-xl-8 otstup" v-for="datacatalog in catalog">
            <div>
                <b-card

                    img-src="https://picsum.photos/600/300/?image=25"
                    img-alt="Image"
                    img-top
                    tag="article"
                    style="max-width: 20rem;"
                    class="mb-2"
                >
                    <b-card-text>
                        {{ datacatalog.name }}
                    </b-card-text>

                    <b-button href="#" variant="primary">Смотреть</b-button>
                </b-card>
            </div>

<!--            <b-card no-body class="overflow-hidden" style="max-width: 540px;">-->
<!--                <b-row no-gutters>-->
<!--                    <b-col md="6">-->
<!--                        <b-card-img :src="`storage/${datacatalog.photo}`" :alt="pic" class="rounded-0"></b-card-img>-->
<!--                    </b-col>-->
<!--                    <b-col md="6">-->
<!--                        <b-card-body title-tag="h1">-->

<!--                            <b-card-text text-tag="h2">-->
<!--                                {{ datacatalog.name }}-->
<!--                            </b-card-text>-->

<!--                            <b-card-text text-tag="h1">-->
<!--                                <router-link to="/artist"  class="nav-link">Детальнее</router-link>-->
<!--                            </b-card-text>-->
<!--                        </b-card-body>-->
<!--                    </b-col>-->
<!--                </b-row>-->
<!--            </b-card>-->

        </div>
    </div>

</div>
</template>

<script>
export default {
    data(){

        return {
            catalog: {},
            group: {}
        }
    },

    mounted() {
        this.getCatalog()
        this.getGroup()

    },

    methods: {
        getCatalog() {
            axios.get('api/v1/catalog')
                .then(response => this.catalog = response.data)
        },
        getGroup() {
            axios.get('api/v1/group')
                .then(response => this.group = response.data)
        }
    }
}
</script>

<style scoped>
.otstup{
    top: 30px;
}
</style>
