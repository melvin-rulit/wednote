<template>

<div v-if="this.$route.path === '/catalog'">
    <b-table
        :items="group"
        :fields="fields"

        :small="true"
        :hover="true"
        :bordered="true"
        selectable
        select-mode="single"
@row-selected="rowSelected"
        selectedVariant="success"
        :fixed="true"
    >


<!--        <template v-slot:cell(selected)="row">-->
<!--            <b-btn @click="rowSelected(row.items)">-->
<!--                Show details-->
<!--            </b-btn>-->
<!--        </template>-->
<!--        <template v-slot:cell(selected)="rowSelected">-->
<!--            <b-form-group>-->


<!--                <button> <b-icon  icon="trash" @click="rowSelectedForUpdate(rowSelected)"></b-icon>  </button>-->

<!--            </b-form-group>-->
<!--        </template>-->
    </b-table>

</div>






</template>

<script>
export default {
    data(){

        return {

            group: {},
            selected: [],

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
        },

        rowSelected(items){
            this.selected = items
         axios.post('')
        }
    }
}
</script>

