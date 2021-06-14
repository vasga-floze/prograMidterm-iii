<template>
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="text-center pt-5">Biografía</h2>
                    <div class="card-body px-5 py-3 border-bottom rounded-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row py-3">
                                        <h2 class="text-center">About Me</h2>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, voluptatum?
                                    </div>
                                    <div class="row py-3">
                                        <h2 class="text-center">My Location</h2>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, aperiam?
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class=" text-center">
                                        <img v-bind:src="('./images/profile.png')" class="img-fluid" width="300">
                                    </div>
                                    <h2 class="text-center py-2">Mi Nombre</h2>
                                    <div class="text-center py-3">
                                        <a href=" ">
                                            <button type="submit" class="btn btn-dark">Edit Profile</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            console.log('Component mounted.')
        }
    }
</script>