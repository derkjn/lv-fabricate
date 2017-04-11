<template>
    <div class="prices">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <td>Store</td>
            <td>Price</td>
            </thead>
            <tbody>
            <tr v-for="store in items">
                <td>
                    {{ store.name }}
                <input type="hidden" :value="store.id">
                </td>
                <td><input type="text" v-model="store.price"></td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-primary" @click.prevent="addLine">Add Store</button>
    </div>
</template>
<script>
  import { concat } from 'lodash';
  export default {
    props: ['stores'],
    data() {
      return {
        lines : [],
      };
    },
    methods: {
      addLine() {
        this.lines.push({id: 0, name: '',price: 0});
      },
    },
    computed: {
      items() {
        return concat(this.stores, this.lines);
      }
    },
  }
</script>