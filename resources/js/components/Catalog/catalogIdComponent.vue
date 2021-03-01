<template>
<div class="container" >


</div>
</template>

<script>
export default {
    props: ['userId'],

    data(){

        return {
            artist: {},
            id: null,
        }
    },

    mounted: function () {
        this.id = this.userId

        axios.get('api/v1/catalog/' +this.id)
            .then(response => {
                this.artist = response.data
            })
    },

    methods: {

    }
}
</script>

<style scoped>
.otstup{
    top: 30px;
}
</style>
