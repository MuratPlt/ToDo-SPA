<template>

    <b-card title="To-Dos" style="text-align: center">
        <b-input-group>
            <b-form-input type="text" v-model="newitem" style="margin-right: 3px"></b-form-input>
            <b-button @click="addItem"> -> </b-button>
        </b-input-group>

        <br>

        <b-table striped thead-class="d-none" :fields="fields" :items="Nutzdaten.notes">
            <template #cell(löschen)="data">
                <b-button @click="delItem(data.item.id, data.index)"> x </b-button>
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
            ],
            newitem: ""
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/todos/')
             .then( response => {
                 this.Nutzdaten = response.data;
             })
            .catch((error => {
                console.log(error);
            }))


    },
    methods: {
        delItem (id, index){
            axios.delete('http://127.0.0.1:8000/api/todos/' + id)
                 .catch((error => {
                     console.log(error);
                 }))
            this.Nutzdaten.notes.splice(index, 1);
        },
        addItem (){
            axios.post('http://127.0.0.1:8000/api/todos', {item: this.newitem})     //ARGUMENTE SETZEN!!!!
                .catch((error => {
                    console.log(error);
                }))
            this.Nutzdaten.notes.push(this.newitem);
        }
    }
}
</script>

<style scoped>

</style>
