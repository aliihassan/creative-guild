<template>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col">col 1</div>
        <div class="col-6">col 2</div>
        <div class="col">col</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => {
    let data = {
      photographer: {}
    };

    return data;
  },
  created() {
    this.load();
  },
  methods: {
    load: function() {
      let self = this;

      axios.get("/api/photographers/1").then(response => {
        self.photographer = response.data.data;
      });
    }
  }
};
</script>
