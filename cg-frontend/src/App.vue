<template>
  <div id="app">
    <div class="container">
      <Photographer :photographer="photographer" />
      <Photo :photos="photos" />
    </div>
  </div>
</template>

<script>
import Photographer from "./components/Photographer.vue";
import Photo from "./components/Photo.vue";
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      photographer: {
        name: "",
        phone: "",
        email: "",
        bio: "",
        profile_picture: ""
      },
      photos: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      let self = this;

      axios
        .get("/json/landscapes.json")
        .then(response => {
          if (response.data) {
            let result = response.data;

            self.photographer.name = result.name;
            self.photographer.phone = result.phone;
            self.photographer.email = result.email;
            self.photographer.bio = result.bio;
            self.photographer.profile_picture = result.profile_picture;
            self.photos = result.album;
          }
        })
        .catch(error => {
          throw error.response.data;
        });
    }
  },
  components: {
    Photographer,
    Photo
  }
};
</script>
