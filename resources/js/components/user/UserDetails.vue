<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card p-2 m-2">
            <h3 class="text-center my-2">Your Profile Information</h3>
          <table class="table table-bordered">
            <tr>
              <th>Name</th>
              <td>{{ getUserProfileInfo.name }}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{ getUserProfileInfo.email }}</td>
            </tr>
            <tr>
              <th>Contact</th>
              <td>{{ getUserProfileInfo.contact }}</td>
            </tr>
            <tr>
              <th>About</th>
              <td>{{ getUserProfileInfo.about }}</td>
            </tr>
            <tr>
              <th>Date Of Birth</th>
              <td>{{ getUserProfileInfo.dob }}</td>
            </tr>
             <router-link
                      class="btn btn-success m-2 text-white"
                      :to="`/edit-profile/${getUserProfileInfo.id}`"
                      >Edit</router-link
                    >
          </table>
        </div>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  name: "UserDetails",
  mounted() {
    this.$store.dispatch("getUserProfileInfo");
  },
  computed: {
    getUserProfileInfo() {
      return this.$store.getters.getUserProfileInfo;
    },
  },
};
</script>