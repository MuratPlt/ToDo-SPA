<template>

    <b-card title="To-Dos">
        <b-table striped thead-class="d-none" :items="todo"></b-table>
    </b-card>

</template>

<script>
let payload;
export default {
    data() {
        return {
            todo: [],
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/todos/')
             .then( response => {
                 console.log(response.data.todos);
                 this.todo = response.data.todos;
             })
            .catch((errors => {
                console.log(errors);
            }))
    },

}
</script>

<style scoped>

</style>
