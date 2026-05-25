@extends('index')
@section('conteudo')
        <div id="message">
            <div class="message_container">
                <div class="persons">
                    <div class="account_name">
                        <p>Zineb_essoussi</p>
                        <p class="search">
                            <img src="./images/edit.png" alt="edit">
                        </p>
                    </div>
                    <div class="account_message">
                        <div class="desc">
                            <p>Messages</p>
                            <p><a href="#">3 requests</a></p>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://fastcompanybrasil.com/wp-content/uploads/2025/05/quer-ser-mais-feliz-confira-5habitos-para-adotar-ainda-hoje.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://img.magnific.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg?semt=ais_hybrid&w=740&q=80" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://img.magnific.com/fotos-gratis/jovem-bonito-vestindo-camiseta-casual-sobre-o-rosto-feliz-de-fundo-azul-sorrindo-com-os-bracos-cruzados-olhando-para-a-camera-pessoa-positiva_839833-12963.jpg?semt=ais_hybrid&w=740&q=80" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://img.magnific.com/fotos-gratis/jovem-afro-americana-vestindo-roupas-casuais-rosto-feliz-sorrindo-com-os-bracos-cruzados-olhando-para-a-camera-pessoa-positiva_839833-8530.jpg?semt=ais_hybrid&w=740&q=80" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-iAH3IJWAWWOd1GmbTMgzxSEKHIaRVp-MLQ&s" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/2024_GERSON_PESSOA_CANDIDATO_PREFEITO_SP_OSASCO_TSE_%28250001905071%29.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGVzc29hfGVufDB8fDB8fHww" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRccJeOe7yDV7iMkojYkNexRmcXVIu4cXg3tw&shttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROYIxfO0el9_f17_msy47K6rpofzEQfA8Dvg&s" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="message">
                    <div class="options">
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://www.jacalculei.com.br/wp-content/uploads/2022/03/O-que-e%CC%81-pessoa-fi%CC%81sica-.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="other">
                            <a href="#">
                                <img src="./images/telephone.png" alt="call">
                            </a>
                            <a href="#">
                                <img src="./images/video_call.png" alt="video call">
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="my_message">
                            <p class="p_message">hello how are you?</p>
                        </div>
                        <div class="response_message">
                            <p class="p_message">hi! i'm fine and you?</p>
                        </div>
                        <div class="my_message">
                            <p class="p_message">I'm good </p>
                        </div>
                        <div class="response_message">
                            <p class="p_message">I'll come tomorrow</p>
                        </div>

                    </div>
                    <form>
                        <input type="text" id="emoji" placeholder="write your email" />
                    </form>

                </div>
            </div>
        </div>


        <!--Create model-->
        <div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                            id="exampleModalLabel">
                            <span class="title_create">Create new post</span>
                            <button class="next_btn_post btn_link"></button>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="up_load" src="./images/upload.png" alt="upload">
                        <p>Drag photos and videos here</p>
                        <button class="btn btn-primary btn_upload">
                            select from your computer
                            <form id="upload-form">
                                <input class="input_select" type="file" id="image-upload" name="image-upload">
                            </form>
                        </button>
                        <div id="image-container" class="hide_img">
                        </div>
                        <div id="image_description" class="hide_img">
                            <div class="img_p"></div>
                            <div class="description">
                                <div class="cart">
                                    <div>
                                        <div class="img">
                                            <img src="./images/profile_img.jpg">
                                        </div>
                                        <div class="info">
                                            <p class="name">Zineb_essoussi</p>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <textarea type="text" id="emoji_create" placeholder="write your email"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="post_published hide_img">
                            <img src="./images/uploaded_post.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection