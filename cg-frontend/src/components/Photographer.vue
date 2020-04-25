<template>
  <div id="profile">
    <div class="row">
      <div class="col">
        <img :src="profilePicture" class="circle-image" />
      </div>
      <div class="col-7">
        <h1>{{photographer.name }}</h1>
        <div id="bio">
          <small>Bio</small>
          <p>{{photographer.bio}}</p>
        </div>
      </div>
      <div class="col-2">
        <div id="contact">
          <div id="phone">
            <small>Phone</small>
            <p>{{photographer.phone}}</p>
          </div>
          <div id="email">
            <small>Email</small>
            <p>{{photographer.email}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["photographer"],
  computed: {
    profilePicture() {
      return `http://localhost:8080/${this.photographer.profile_picture}`;
    }
  }
};
</script>
