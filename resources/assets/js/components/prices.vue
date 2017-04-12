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
                    <select name="store[]" class="select2">
                        <option v-for="option in stores" :key="option.id" :value="option.id">{{ option.name }}</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="price[]" v-model="store.price">
                </td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-primary" @click.prevent="addLine">Add Store</button>
    </div>
</template>
<script>
  import { concat } from 'lodash';
  require('select2');

  export default {
    props: ['stores'],
    data() {
      return {
        lines: [],
      };
    },
    methods: {
      addLine() {
        this.lines.push({ id: 0, name: '', price: 0 });
        $('.select2').select2({
          minimumSearch: 'infinity',
        })
      },
      removeLine(index){
        //
      },
    },
    computed: {
      items() {
        return concat(this.stores, this.lines);
      },
      formattedStores(){
        return this.stores.map((store) => {
          return {
            label: store.name,
            id: store.id,
          }
        });
      }
    },
  }
</script>