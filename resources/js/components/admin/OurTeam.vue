<template>
  <div class="container">
    
      <h3 class="title">Meet Our Team</h3>
    
     <div class="row">
      <div class="col-md-4 mb-2" v-for="(person, index) in getAllEmployees" :key="index">
        <div class="card" >
            <img :src="showImage(person.image)" class="img-fluid" width="100%" height="200"/>
         
          <div class="card-body text-center">
            <h5>{{ person.name }}</h5>
            <h6>{{ person.position }}</h6>
          </div>
        </div>
      </div>
    </div> 
  </div>
</template>

<script>
export default {
  name: "OurTeam",
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch("getOurTeam");
  },
  computed: {
    getAllEmployees() {
      return this.$store.getters.getOurTeam;
    },
  },
  methods: {
    showImage(img) {
      return "/uploadimage/" + img;
    },
  },
};
</script>

<style scoped>
h5{
    font-weight: 700;
    text-align: center;
}
h6{
    font-weight: 600;
    color: grey;
}
.title{
    text-align: center;
    margin: 20px 0px;
    font-weight: 800;
}
</style>