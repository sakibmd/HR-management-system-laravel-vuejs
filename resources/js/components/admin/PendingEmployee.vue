<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card m-2 p-2">
          <div class="card-header">
            <h3 class="card-title">Pending Eployee List</h3>
          </div>
          <div class="card-body">
            <table
              class="table table-bordered table-hover"
              v-if="getAllPendingEmployees.length > 0"
            >
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
                  v-for="(employee, index) in getAllPendingEmployees"
                  :key="index"
                >
                  <td>{{ employee.name }}</td>
                  <td>{{ employee.dob }}</td>
                  <td>{{ employee.about }}</td>
                  <td>{{ employee.contact }}</td>
                  <td>
                    <img
                      :src="showImage(employee.image)"
                      width="50"
                      height="50"
                    />
                  </td>
                  <td>
                    <a
                      href=""
                      @click.prevent="approve(employee.id)"
                      class="btn btn-success btn-sm m-1"
                      >Approve</a
                    >
                    <a
                      href=""
                      @click.prevent="reject(employee.id)"
                      class="btn btn-danger btn-sm m-1"
                      >Reject</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
            <h2 v-else class="bg-info text-white p-2 m-2 text-center">
              No Pending Employees Found
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PendingEployees",
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch("getAllPendingEmployees");
  },
  computed: {
    getAllPendingEmployees() {
      return this.$store.getters.getAllPendingEmployees;
    },
  },
  methods: {
    showImage(img) {
      return "/uploadimage/" + img;
    },
    approve(id) {
      axios.get("/admin/approve/" + id).then(() => {
        this.$store.dispatch("getAllPendingEmployees");
        Toast.fire({
          icon: "success",
          title: "Employee Request Approved Successfully",
        });
      });
    },
    reject(id) {
      axios.get("/admin/reject/" + id).then(() => {
        this.$store.dispatch("getAllPendingEmployees");
        Toast.fire({
          icon: "success",
          title: "Employee Request Reject Successfully",
        });
      });
    },
  },
};
</script>

<style></style>