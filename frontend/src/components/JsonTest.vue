<script>
import axios from 'axios';


const API_URL = "http://localhost/api.php";



export default {
  name: "JsonTest",
  mounted() {

    axios.get(API_URL).then(res => {
      const data = res.data;

      console.log(data);
    });
  }



};
</script>

<template>
  <div>JsonTest</div>
</template>

<style scoped>

</style>
