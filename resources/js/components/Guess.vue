<template>
    <div class="container-fluid">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!--
            <div class="row ml-5 my-2">
                <div class="col-7 mx-1">-->
                    <div class="col-md-12">
                        <!--banner-->
                        <div class="flex content-justify-center">
                            <img class="img-fluid shadow sm:rounded-lg" v-bind:src="('./images/banner.png')" alt="Responsive image">
                        </div>

                        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" v-bind:src="('./images/hamb.png')" alt="Responsive image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" v-bind:src="('./images/comid.png')" alt="Responsive image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" v-bind:src="('./images/pla.png')" alt="Responsive image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aquí iria el formulario para login -->
                
            </div>
            <!--
        </div>
    </div>
    -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
