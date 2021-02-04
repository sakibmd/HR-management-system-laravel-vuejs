<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Employees</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form
            @submit.prevent="updateProfile()"
            role="form"
            enctype="multipart/form-data"
          >
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input
                  type="text"
                  id="name"
                  class="form-control"
                  placeholder="name"
                  v-model="form.name"
                  name="name"
                  :class="{
                    'is-invalid': form.errors.has('name'),
                  }"
                />
                <has-error :form="form" field="name"></has-error>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  class="form-control"
                  placeholder="email"
                  v-model="form.email"
                  name="email"
                  :class="{
                    'is-invalid': form.errors.has('email'),
                  }"
                />
                <has-error :form="form" field="email"></has-error>
              </div>

              <div class="form-group">
                <label for="contact">Contact</label>
                <input
                  type="text"
                  id="contact"
                  class="form-control"
                  placeholder="contact"
                  v-model="form.contact"
                  name="contact"
                  :class="{
                    'is-invalid': form.errors.has('contact'),
                  }"
                />
                <has-error :form="form" field="contact"></has-error>
              </div>

              <div class="form-group">
                <label for="dob">Date of birth</label>
                <input
                  type="date"
                  id="dob"
                  class="form-control"
                  v-model="form.dob"
                  name="dob"
                  :class="{
                    'is-invalid': form.errors.has('dob'),
                  }"
                />
                <has-error :form="form" field="dob"></has-error>
              </div>

              <div class="form-group">
                <label for="about">About</label>

                <textarea
                  name="about"
                  class="form-control"
                  placeholder="about"
                  v-model="form.about"
                  :class="{
                    'is-invalid': form.errors.has('about'),
                  }"
                  id="about"
                  rows="3"
                ></textarea>
                <has-error :form="form" field="about"></has-error>
              </div>

              <div class="form-group">
                <input
                  @change="changePhoto($event)"
                  name="image"
                  type="file"
                  :class="{
                    'is-invalid': form.errors.has('image'),
                  }"
                />

               

                <has-error :form="form" field="image"></has-error>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <router-link
                class="btn btn-danger btn-sm m-1"
                :to="`/user-details`"
                >Back</router-link
              >
              <button type="submit" class="btn btn-primary btn-sm">
                Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "EditEmployees",
  mounted() {
    axios
      .get(`/user/editProfileInfo/${this.$route.params.id}`)
      .then((response) => {
        this.form.fill(response.data.profileInfo);
        //console.log(response.data.category)
      });
  },
  data() {
    return {
      form: new Form({
        name: "",
        email: "",
        about: "",
        dob: "",
        contact: "",
        image: "",
      }),
    };
  },
  methods: {
    updateProfile() {
      this.form
        .post(`/user/updateProfile/${this.$route.params.id}`)
        .then((response) => {
          this.$router.push("/user-details");
          Toast.fire({
            icon: "success",
            title: "Profile updated successfully",
          });
        });
    },

    changePhoto(event) {
      let file = event.target.files[0];
      if (file.size > 1048576) {
        Swal.fire({
          type: "error",
          title: "Oops...",
          text: "Something went wrong!",
          footer: "<a href>Why do I have this issue?</a>",
        });
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.image = event.target.result;
          console.log(event.target.result);
        };
        reader.readAsDataURL(file);
      }
    },

    
  },
};
</script>
