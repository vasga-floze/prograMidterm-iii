<template>
    <div>
        <div class="row">
            <div class="col-12 col-sm-8 mx-auto">
                <div class="card mb-4">
                    <tr v-for="receta in recetas" v-bind:key="receta.id">
                        <div class="card-group my-3">
                            <div class="card bg-light mr-4 ml-4">
                                <img :src="receta.imagen" class="card-img-top" height="500" width="350">
                                <div class="card-body">
                                    <h5 class="card-title">{{receta.nombre}}</h5>
                                    <p class="card-text">Descripción: <span >{{receta.descripcion}}</span></p>
                                    <p class="card-text">Ingredientes: <span >{{receta.ingredientes}}</span></p>
                                    <p class="card-text">Tiempo de Preparación: <span >{{receta.tpreparacion}}</span></p>
                                    <p class="card-text">Dificultad: <span >{{receta.dificultad}}</span></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Publicado hace 3 minutos por Usuario</small>
                                </div>
                            </div>
                        </div>
                    </tr>
                </div>
            </div>
        </div> 
    </div>
</template>

<script>
    export default {
        data(){
            return{
                recetas:[],
                receta: [],
                receta:{
                    id: '',
                    nombre: '',
                    descripcion: '',
                    ingrediente: '',
                    tpreparacion: '',
                    dificultad: '',
                    imagen: '',
                    estado: ''
                },
                update: false,
                receta_id: ''
            }
        },
        created(){
            this.getRecetas();
        },
        methods: {
            getRecetas(api_url){
                api_url = api_url || '/api/recetas';
                fetch(api_url)
                    .then(response=>response.json())
                    .then(response=>{
                        this.recetas = response.data;
                    })
                    .catch(err=>console.log(err));
            },
            addUpdateReceta(){                

                if(this.update===false){
                    fetch('/api/receta',{
                        method: 'post',
                        body: JSON.stringify(this.receta),
                        headers: {
                            'content-type': 'application/json'
                        }
                        })
                        .then(response=>response.json())
                        .then(data=>{
                            this.getRecetas();
                        })
                        .catch(err=>console.log(err));
                }else{
                    fetch('/api/receta/',{
                        method: 'put',
                        body: JSON.stringify(this.receta),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(response=>response.json())
                        .then(data=>{
                            this.getRecetas();
                        })
                        .catch(err=>console.log(err));
                }
            },
            deleteReceta(id){
                fetch('/api/receta/' + id,{
                  method: 'delete'
                })
                    .then(response=>response.json())
                    .then(data=>{
                        this.getRecetas();
                    })
                    .catch(err=>console.log(err));
            },
            updateReceta(Receta){
                this.update =true;
                this.receta.id = receta.id;
                this.receta.receta_id = receta.id;
                this.receta.nombre = receta.nombre;
                this.receta.descripcion = receta.descripcion;
                this.receta.ingrediente = receta.ingrediente;
                this.receta.tpreparacion = receta.tpreparacion;
                this.receta.dificultad = receta.dificultad;
                this.receta.imagen = receta.imagen;
                this.receta.estado = receta.estado;
            }
        }
    };
</script>