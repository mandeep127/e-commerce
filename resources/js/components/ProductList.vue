<template>
     <div>
         <h1>Product Listing</h1>
         <div v-if="products.length">
             <div v-for="product in products" :key="product.id" class="product-card">
                 <h3>{{ product.name }}</h3>
                 <img :src="`/images/${product.image}`" alt="product image" />
                 <p>{{ product.description }}</p>
                 <p>Price: ₹{{ product.price }}</p>
             </div>
         </div>
         <div v-else>
             <p>No products available.</p>
         </div>
     </div>
 </template>
 
 <script>
 export default {
     data() {
         return {
             products: []
         };
     },
     mounted() {
         this.fetchProducts();
     },
     methods: {
         fetchProducts() {
             axios.get('/products').then(response => {
                 this.products = response.data;
             }).catch(error => {
                 console.log(error);
             });
         }
     }
 };
 </script>
 
 <style>
 .product-card {
     border: 1px solid #ccc;
     padding: 16px;
     margin: 16px 0;
 }
 </style>
 