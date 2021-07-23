<template>

    <b-card title="To-Dos">
        <b-table striped thead-class="d-none" :fields="fields" :items="Nutzdaten.notes">
            <template #cell(löschen)="data">
                <b-button @click="delItem(data.item.id)"> x </b-button>
            </template>
        </b-table>
    </b-card>

</template>

<script>
export default {
    data() {
        return {
            Nutzdaten: [],
            fields: [
                'todo',
                'löschen'
            ]
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/todos/')
             .then( response => {
                 console.log(response.data);        // DEBUG
                 this.Nutzdaten = response.data;
             })
            .catch((error => {
                console.log(error);
            }))
    },
    methods: {
        delItem (id){
            axios.delete('http://127.0.0.1:8000/api/todos/' + id)
                 .catch((error => {
                     console.log(error);
                 }))
        }
    }
}
</script>

<style scoped>

</style>
