<template>
  <layout title="Welcome">
    <h2>About page</h2>
    <p>Hello {{ name }}, welcome to your first Inertia app!</p>
  </layout>
</template>

<script>
import Layout from "../shared/Layout";

export default {
  components: {
    Layout,
  },
  props: {
    name,
  },
};
</script>