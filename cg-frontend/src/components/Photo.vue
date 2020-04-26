<template>
  <div>
    <div class="row">
      <div class="cards">
        <template v-for="photo in photos">
          <div class="card" :key="photo.id">
            <span
              class="card-header"
              :style="{ backgroundImage: `url('${displayImage(photo.img)}')` }"
            >
              <span class="card-title">
                <h3>{{ photo.title }}</h3>
              </span>
            </span>
            <span class="card-summary">{{ photo.description }}</span>
            <div class="d-flex justify-content-between">
              <div class="icon">
                <template v-if="photo.featured">
                  <i class="fa fa-heart" style="font-size:20px;color:red;"></i>
                </template>
              </div>
              <div class="date">{{ photo.date }}</div>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["photos"],
  computed: {
    photo() {
      return ``;
    }
  },
  methods: {
    displayImage(image) {
      return "http://localhost:8080/" + image;
    }
  }
};
</script>
