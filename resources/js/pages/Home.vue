<template>
  <layout title="Welcome">
    <h1>Welcome</h1>
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