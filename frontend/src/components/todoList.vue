
<script>


import axios from 'axios';
const API_URL = "http://localhost/";

export default {
  name: "todoList",
  data() {
    return {
      todoList: [],
      newTodoText: ""
    };
  },
  methods: {

    getAllData() {

      axios.get(API_URL + "api.php")
        .then(res => {

          const data = res.data;

          this.todoList = data;
        });

    },
    createNewTask(e) {
      // "e" è l'evento del click
      // la funzione previene che la pagina si ricarchi di default

      // if che evita di aggiungere righe vuote per sbaglio
      if (this.newTodoText != "") {


        e.preventDefault();

        const newTodoText = this.newTodoText;

        const params = {
          params: {
            "text": newTodoText
          }
        };

        // faccio una chiamata all'api che crea new tasks, e le passo i params che sono
        // la copia del v-model collegato all'input (newTodoText)
        axios.get(API_URL + "api_create_new_task.php", params)
          .then(res => {

            const data = res.data;
            console.log("data", data);
          });




        // cancello cosa c'è scritto nell'input
        this.newTodoText = "";

        // chiamo di nuovo tutti i dati
        this.getAllData();
      };
    }
  },
  mounted() {
    this.getAllData();

  }



};
</script>

<template>
  <div class="container">
    <h1>todoList</h1>
    <ul>
      <li v-for="(todoElem, ind) in todoList" :key="ind" :class="todoElem.completed === true ? 'barrato' : ''">
        {{ todoElem.text }}
      </li>
    </ul>
    <form @submit="createNewTask">
      <input type="text" name="text" v-model="newTodoText">
      <input type="submit" value="CREATE NEW TASK">

    </form>
  </div>
</template>



<style scoped>
.container {
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}

h1 {
  display: flex;
  justify-content: center;
}

ul {
  display: flex;
  flex-direction: column;
  align-items: center;
  /* justify-content: space-between; */
  padding: 0 10%;
  width: 100%;
}

li {
  list-style: none;
  /* background-color: red; */
  margin-top: 10px;
}

li:last-child {
  margin-bottom: 10px;
}

.barrato {
  text-decoration: line-through;

}

/* form {
  display: flex;
  flex-direction: column;
  align-items: center;

} */
</style>
