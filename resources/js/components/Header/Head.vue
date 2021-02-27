<template>

<div v-if="this.$route.path === '/catalog'" class="row">
    <b-table
        :items="group"
        :fields="fields"

        :small="true"
        :hover="true"
        :bordered="true"

        :fixed="true"
    >

    </b-table>


</div>






</template>

<script>
export default {
    data(){

        return {

            group: {},

            fields:[
                // 'index',
                // {
                //     key: 'id',
                //     label: 'Индекс',
                // },
                {
                    key: 'name',
                    label: 'Список групп',
                }
            ],
        }
    },

    mounted() {

        this.getGroup()

    },

    methods: {

        getGroup() {
            axios.get('api/v1/group')
                .then(response => this.group = response.data)
        }
    }
}
</script>

