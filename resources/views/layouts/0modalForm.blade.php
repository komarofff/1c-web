
<div tabindex="-1" role="dialog" id="contact_modal" class="modal fade " style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <button type="button" data-dismiss="modal" aria-label="Close" class="closeModal" id="closeModalWindow"><span
                    aria-hidden="true">×</span>
            </button>
            <div class="grid_cont ">
                <div class="grid_3_8">
                    <div>
                        <form id="modalForm" method="POST" enctype="multipart/form-data" class="relative">
                            <div class="fcontact__form">
                                <div class="input_group"><input name="name" type="text" id="nameForm"
                                                                class="form-control focusForm " placeholder="Name"
                                                                required>
                                    <!-- <label
                                            for="phone" class="form-control__helper">Name</label> -->
                                </div>
                                <div class="mb-25"></div>
                                <div class="input_group"><input name="email" type="email" id="emailForm"
                                                                class="form-control" placeholder="E-mail" required>
                                    <!--
                                     <label
                                            for="email" class="form-control__helper">E-mail</label>

                                   --></div>
                                <div class="mb-25"></div>
                                <div class="textarea_group pb-50"><textarea name="message"
                                                                            id="messageForm"
                                                                            class="form-control textarea "
                                                                            placeholder="Message" required></textarea>
                                    <!--                                        <label-->
                                    <!--                                                for="message" class="form-control__helper">Message</label>-->
                                    <div class="custom-file">
                                        <div class="form-group">
                                            <div class="dragging__file">
                                                Drop here to upload
                                            </div>
                                            <label class="label"><i class="material-icons">attach_file</i> <span
                                                    class="title" id="name_file">Attach a file</span>
                                                <input type="file" id="fileForm" name="file"></label></div>
                                    </div>
                                </div>
                                <div class="  mt-20">
                                    <button type="submit" class="btn btn-primary btn-large services__description-button" id="sendForm">Send</button>
                                    <!----></div>
                            </div>
                        </form> <!----></div>
                </div>
                <div class="contacts grid_9_11">
                    <div class="ajax-reply"></div>
                    <div class="contact-us_right"><b>PO SYSTEMS GROUP LTD</b><p><small>Belarus</small> <b>+375 29 700-50-23 </b> <span>
                Minsk, Nekrasova str. 39-1, room 327
                </span></p>
                        <p><small>Viber, Telegramm, WhatsApp</small> <b>+375 29 700-50-23</b> <span>

                </span></p>
                        <p><small><a href="mailto:info@1c-group.by"
                                     class="email_underline">info@1c-group.by</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

