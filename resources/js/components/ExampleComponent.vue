<template>
    <div class="modal fade right-modal" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <nav class="schedule w-100">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link col-2 p-0 d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                                <h1 class="m-0 h4 text-dark"><i class="icofont-close-line"></i></h1>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="modal-body p-0">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <td style="width: 33%; text-align: center;">
                                <img height="80px" :src="'/app/grocery/products/AD414I.png'" >
                            </td>
                            <td style="width: 33%; text-align: center;">
                                Garlic
                            </td>
                            <td style="width: 33%; text-align: center;">
                                1
                            </td>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="width: 33%; text-align: center;">
                                <img height="80px" :src="'/app/grocery/products/AD414I.png'" >
                            </td>
                            <td style="width: 33%; text-align: center;">
                                Garlic
                            </td>
                            <td style="width: 33%; text-align: center;">
                                1
                            </td>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="width: 33%; text-align: center;">
                                <img height="80px" :src="'/app/grocery/products/AD414I.png'" >
                            </td>
                            <td style="width: 33%; text-align: center;">
                                Garlic
                            </td>
                            <td style="width: 33%; text-align: center;">
                                1
                            </td>
                        </tr>
                        <tr style="width: 100%;">
                            <td style="width: 33%; text-align: center;">
                                <img height="80px" :src="'/app/grocery/products/AD414I.png'" >
                            </td>
                            <td style="width: 33%; text-align: center;">
                                Garlic
                            </td>
                            <td style="width: 33%; text-align: center;">
                                1
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <a href="#" class="btn border-top border-right btn-lg btn-block" data-dismiss="modal">Close</a>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <a href="help_support.html" class="btn border-top btn-lg btn-block">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
