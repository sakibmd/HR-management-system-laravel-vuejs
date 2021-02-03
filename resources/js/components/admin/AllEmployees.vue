<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card m-2 p-2">
          <div class="card-header">
            <h3 class="card-title">All Eployee List</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>DOB</th>
                  <th>About</th>
                  <th>Contact</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(employee, index) in getAllEmployees" :key="index">
                  <td>{{ employee.name }}</td>
                  <td>{{ employee.dob }}</td>
                  <td>{{ employee.about }}</td>
                  <td>{{ employee.contact }}</td>
                  <td>Image</td>
                  <td>
                    <router-link
                      class="btn btn-info btn-sm"
                      :to="`/approve-employee/${employee.id}`"
                      >Edit</router-link
                    >
                    <a
                      href=""
                      @click.prevent="deleteCategory(category.id)"
                      class="btn btn-danger btn-sm"
                      >Delete</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AllEployees",
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch("getAllEmployees");
  },
  computed: {
    getAllEmployees() {
      return this.$store.getters.getAllEmployees;
    },
  },
  methods: {},
};
</script>

<style></style>