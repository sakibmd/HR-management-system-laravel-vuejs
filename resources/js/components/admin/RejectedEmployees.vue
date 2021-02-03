<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card m-2 p-2">
          <div class="card-header">
            <h3 class="card-title">Pending Eployee List</h3>
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
                <tr
                  v-for="(employee, index) in getAllRejectedEmployees"
                  :key="index"
                >
                  <td>{{ employee.name }}</td>
                  <td>{{ employee.dob }}</td>
                  <td>{{ employee.about }}</td>
                  <td>{{ employee.contact }}</td>
                  <td>Image</td>
                  <td>
                    <a
                      href=""
                      @click.prevent="deleteRejectedEmployee(employee.id)"
                      class="btn btn-danger btn-sm"
                      >Permanently Delete</a
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
  name: "RejectedEployees",
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch("getAllRejectedEmployees");
  },
  computed: {
    getAllRejectedEmployees() {
      return this.$store.getters.getAllRejectedEmployees;
    },
  },
  methods: {
        deleteRejectedEmployee(id) {
            axios.get("/admin/deleteRejectedEmployee/" + id).then(() => {
                this.$store.dispatch("getAllRejectedEmployees");
                Toast.fire({
                    icon: "success",
                    title: "Deleted Successfully"
                });
            });
        },
  },
};
</script>

<style></style>